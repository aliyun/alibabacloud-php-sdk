<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class AddDirectionalCardShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $fileUri;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $orderListShrink;

    /**
     * @var string
     */
    public $tagListShrink;

    /**
     * @var string
     */
    public $uploadMethod;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'fileUri'         => 'FileUri',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'orderListShrink' => 'OrderList',
        'tagListShrink'   => 'TagList',
        'uploadMethod'    => 'UploadMethod',
        'uploadType'      => 'UploadType',
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
        if (null !== $this->orderListShrink) {
            $res['OrderList'] = $this->orderListShrink;
        }
        if (null !== $this->tagListShrink) {
            $res['TagList'] = $this->tagListShrink;
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
     * @return AddDirectionalCardShrinkRequest
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
            $model->orderListShrink = $map['OrderList'];
        }
        if (isset($map['TagList'])) {
            $model->tagListShrink = $map['TagList'];
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
