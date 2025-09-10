<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsRequest\quotaDimensions;

class ListQuotaAlarmsRequest extends Model
{
    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var quotaDimensions[]
     */
    public $quotaDimensions;
    protected $_name = [
        'alarmName' => 'AlarmName',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaDimensions' => 'QuotaDimensions',
    ];

    public function validate()
    {
        if (\is_array($this->quotaDimensions)) {
            Model::validateArray($this->quotaDimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->quotaDimensions)) {
                $res['QuotaDimensions'] = [];
                $n1 = 0;
                foreach ($this->quotaDimensions as $item1) {
                    $res['QuotaDimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['QuotaDimensions'] as $item1) {
                    $model->quotaDimensions[$n1] = quotaDimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
