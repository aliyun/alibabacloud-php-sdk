<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class MountDirectoryRequest extends Model
{
    /**
     * @description The ID of the directory that you want to add to the left-side navigation pane of DataAnalysis. This parameter is used together with the TargetType parameter. For example, if you set the TargetType parameter to META_ALBUM, you must set the TargetId parameter to the ID of the related data album. You can call the [ListMetaCollections](https://help.aliyun.com/document_detail/469938.html) operation to obtain the ID of the data album. The ID is indicated by the QualifiedName parameter.
     *
     * @example album.339
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the directory that you want to add to the left-side navigation pane of DataAnalysis. Example: META_ALBUM, which indicates the data album.
     *
     * @example META_ALBUM
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the user in the tenant.
     *
     *   If you do not configure TargetUserId, the specified directory belongs to you.
     *   If you configure TargetUserId, the specified directory belongs to the user specified by using TargetUserId.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'targetId'     => 'TargetId',
        'targetType'   => 'TargetType',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MountDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
