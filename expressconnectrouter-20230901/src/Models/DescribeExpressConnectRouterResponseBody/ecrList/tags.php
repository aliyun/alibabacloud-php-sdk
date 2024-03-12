<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterResponseBody\ecrList;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example 181614792955****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 0
     *
     * @var int
     */
    public $category;

    /**
     * @example 000000100089****
     *
     * @var int
     */
    public $id;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example rg-aek2aq7f4va****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example ECR
     *
     * @var string
     */
    public $resuorceType;

    /**
     * @example 0
     *
     * @var int
     */
    public $scope;

    /**
     * @example test
     *
     * @var string
     */
    public $tagKey;

    /**
     * @example test
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'category'     => 'Category',
        'id'           => 'Id',
        'regionNo'     => 'RegionNo',
        'resourceId'   => 'ResourceId',
        'resuorceType' => 'ResuorceType',
        'scope'        => 'Scope',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resuorceType) {
            $res['ResuorceType'] = $this->resuorceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResuorceType'])) {
            $model->resuorceType = $map['ResuorceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
