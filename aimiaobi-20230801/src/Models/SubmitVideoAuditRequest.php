<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitVideoAuditRequest extends Model
{
    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var float
     */
    public $snapshotInterval;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'ext' => 'Ext',
        'fileKey' => 'FileKey',
        'snapshotInterval' => 'SnapshotInterval',
        'url' => 'Url',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->snapshotInterval) {
            $res['SnapshotInterval'] = $this->snapshotInterval;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['SnapshotInterval'])) {
            $model->snapshotInterval = $map['SnapshotInterval'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
