<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsRequest\dimensions;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $keyWord;

    /**
     * @var dimensions[]
     */
    public $dimensions;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'maxResults'      => 'MaxResults',
        'productCode'     => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'status'          => 'Status',
        'keyWord'         => 'KeyWord',
        'dimensions'      => 'Dimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
