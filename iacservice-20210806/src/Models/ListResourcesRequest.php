<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class ListResourcesRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceValue;

    /**
     * @var string
     */
    public $specType;
    protected $_name = [
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'sourceType'  => 'sourceType',
        'sourceValue' => 'sourceValue',
        'specType'    => 'specType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceValue) {
            $res['sourceValue'] = $this->sourceValue;
        }
        if (null !== $this->specType) {
            $res['specType'] = $this->specType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['sourceValue'])) {
            $model->sourceValue = $map['sourceValue'];
        }
        if (isset($map['specType'])) {
            $model->specType = $map['specType'];
        }

        return $model;
    }
}
