<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class AddDirectionalCardRequest extends Model
{
    /**
     * @example https://linkcard-user-online.oss-cn-zhangjiakou.aliyuncs.com/DIRECTIONAL_GROUP/20220811/xxxx.csv
     *
     * @var string
     */
    public $fileUri;

    /**
     * @example 5
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $orderList;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @example TAG
     *
     * @var string
     */
    public $uploadMethod;

    /**
     * @example ALL
     *
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'fileUri'      => 'FileUri',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'orderList'    => 'OrderList',
        'tagList'      => 'TagList',
        'uploadMethod' => 'UploadMethod',
        'uploadType'   => 'UploadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUri) {
            $res['FileUri'] = $this->fileUri;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = $this->orderList;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->uploadMethod) {
            $res['UploadMethod'] = $this->uploadMethod;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDirectionalCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUri'])) {
            $model->fileUri = $map['FileUri'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['OrderList'])) {
            if (!empty($map['OrderList'])) {
                $model->orderList = $map['OrderList'];
            }
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['UploadMethod'])) {
            $model->uploadMethod = $map['UploadMethod'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        return $model;
    }
}
