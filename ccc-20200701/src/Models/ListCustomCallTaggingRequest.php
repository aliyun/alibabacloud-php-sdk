<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCustomCallTaggingRequest extends Model
{
    /**
     * @example ["TagA"]
     *
     * @var string
     */
    public $callTagNameList;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1312121****
     *
     * @var string
     */
    public $searchPattern;
    protected $_name = [
        'callTagNameList' => 'CallTagNameList',
        'instanceId'      => 'InstanceId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'searchPattern'   => 'SearchPattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callTagNameList) {
            $res['CallTagNameList'] = $this->callTagNameList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomCallTaggingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTagNameList'])) {
            $model->callTagNameList = $map['CallTagNameList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }

        return $model;
    }
}
