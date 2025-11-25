<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class MigrateExperimentsRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $destFolderId;

    /**
     * @var bool
     */
    public $isOwner;

    /**
     * @var int
     */
    public $sourceExpId;

    /**
     * @var bool
     */
    public $updateIfExists;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'destFolderId' => 'DestFolderId',
        'isOwner' => 'IsOwner',
        'sourceExpId' => 'SourceExpId',
        'updateIfExists' => 'UpdateIfExists',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
