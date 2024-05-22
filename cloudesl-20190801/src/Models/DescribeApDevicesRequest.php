<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribeApDevicesRequest extends Model
{
    /**
     * @var bool
     */
    public $activated;

    /**
     * @var string
     */
    public $apMac;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'activated'  => 'Activated',
        'apMac'      => 'ApMac',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'storeId'    => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activated) {
            $res['Activated'] = $this->activated;
        }
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Activated'])) {
            $model->activated = $map['Activated'];
        }
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
