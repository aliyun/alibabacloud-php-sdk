<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class GetHistoryDataListRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1608019800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****
     *
     * @var string
     */
    public $key;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example HB5jyvZWzwcM****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1608010000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'apiVersion'  => 'ApiVersion',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'key'         => 'Key',
        'pageSize'    => 'PageSize',
        'productKey'  => 'ProductKey',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHistoryDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
