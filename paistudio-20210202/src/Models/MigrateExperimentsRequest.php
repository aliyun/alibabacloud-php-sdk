<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class MigrateExperimentsRequest extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description This parameter is required.
     *
     * @example folder-12321313
     *
     * @var string
     */
    public $destFolderId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOwner;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $sourceExpId;

    /**
     * @example true
     *
     * @var bool
     */
    public $updateIfExists;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'  => 'Accessibility',
        'destFolderId'   => 'DestFolderId',
        'isOwner'        => 'IsOwner',
        'sourceExpId'    => 'SourceExpId',
        'updateIfExists' => 'UpdateIfExists',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->destFolderId) {
            $res['DestFolderId'] = $this->destFolderId;
        }
        if (null !== $this->isOwner) {
            $res['IsOwner'] = $this->isOwner;
        }
        if (null !== $this->sourceExpId) {
            $res['SourceExpId'] = $this->sourceExpId;
        }
        if (null !== $this->updateIfExists) {
            $res['UpdateIfExists'] = $this->updateIfExists;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateExperimentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['DestFolderId'])) {
            $model->destFolderId = $map['DestFolderId'];
        }
        if (isset($map['IsOwner'])) {
            $model->isOwner = $map['IsOwner'];
        }
        if (isset($map['SourceExpId'])) {
            $model->sourceExpId = $map['SourceExpId'];
        }
        if (isset($map['UpdateIfExists'])) {
            $model->updateIfExists = $map['UpdateIfExists'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
