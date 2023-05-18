<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTargetAttachmentsForControlPolicyResponseBody\targetAttachments;

use AlibabaCloud\Tea\Model;

class targetAttachment extends Model
{
    /**
     * @description The time when the control policy was attached to the object.
     *
     * @example 2021-03-19T02:56:24Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @description The ID of the object.
     *
     * @example fd-ZDNPiT****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the object.
     *
     * @example Dev_Department
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the object. Valid values:
     *
     *   Root: Root folder
     *   Folder: child folder of the Root folder
     *   Account: member account
     *
     * @example Folder
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'attachDate' => 'AttachDate',
        'targetId'   => 'TargetId',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetAttachment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
