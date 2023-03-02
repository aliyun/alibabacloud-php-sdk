<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UmountDirectoryRequest extends Model
{
    /**
     * @description The ID of the directory that you want to remove from the left-side navigation pane of DataAnalysis. This parameter is used together with the TargetType parameter.
     *
     * For example, if you set the TargetType parameter to META_ALBUM, you must set the TargetId parameter to the ID of the related data album. You can call the [ListMetaCollections](~~469938~~) operation to obtain the ID of the data album. The ID is indicated by the QualifiedName parameter.
     * @example album.339
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the directory that you want to remove from the left-side navigation pane of DataAnalysis. Example: META_ALBUM, which indicates the data album.
     *
     * @example META_ALBUM
     *
     * @var string
     */
    public $targetType;

    /**
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
     * @return UmountDirectoryRequest
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
