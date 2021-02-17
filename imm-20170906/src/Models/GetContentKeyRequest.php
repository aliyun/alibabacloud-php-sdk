<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetContentKeyRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $DRMServerId;

    /**
     * @var string
     */
    public $keyIds;
    protected $_name = [
        'project'     => 'Project',
        'versionId'   => 'VersionId',
        'DRMServerId' => 'DRMServerId',
        'keyIds'      => 'KeyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->DRMServerId) {
            $res['DRMServerId'] = $this->DRMServerId;
        }
        if (null !== $this->keyIds) {
            $res['KeyIds'] = $this->keyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContentKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['DRMServerId'])) {
            $model->DRMServerId = $map['DRMServerId'];
        }
        if (isset($map['KeyIds'])) {
            $model->keyIds = $map['KeyIds'];
        }

        return $model;
    }
}
