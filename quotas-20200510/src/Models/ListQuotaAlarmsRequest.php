<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsRequest\quotaDimensions;
use AlibabaCloud\Tea\Model;

class ListQuotaAlarmsRequest extends Model
{
    /**
     * @description The name of the alert.
     *
     * @example rules
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The maximum number of records that can be returned for the query.
     *
     * Valid values: 1 to 200. Default value: 30.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position from which you want to start the query.
     *
     * > An empty value indicates that the query starts from the beginning.
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * > The `ProductCode` parameter is required if you specify this parameter.
     * @example q_hvnoqv
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @description The quota dimensions.
     *
     * @var quotaDimensions[]
     */
    public $quotaDimensions;
    protected $_name = [
        'alarmName'       => 'AlarmName',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaDimensions' => 'QuotaDimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->quotaDimensions) {
            $res['QuotaDimensions'] = [];
            if (null !== $this->quotaDimensions && \is_array($this->quotaDimensions)) {
                $n = 0;
                foreach ($this->quotaDimensions as $item) {
                    $res['QuotaDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaAlarmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['QuotaDimensions'])) {
            if (!empty($map['QuotaDimensions'])) {
                $model->quotaDimensions = [];
                $n                      = 0;
                foreach ($map['QuotaDimensions'] as $item) {
                    $model->quotaDimensions[$n++] = null !== $item ? quotaDimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
