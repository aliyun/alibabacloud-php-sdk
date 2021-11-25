<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetContentKeyRequest extends Model
{
    /**
     * @var string
     */
    public $DRMServerId;

    /**
     * @var string
     */
    public $keyIds;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'DRMServerId' => 'DRMServerId',
        'keyIds'      => 'KeyIds',
        'project'     => 'Project',
        'versionId'   => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DRMServerId) {
            $res['DRMServerId'] = $this->DRMServerId;
        }
        if (null !== $this->keyIds) {
            $res['KeyIds'] = $this->keyIds;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['DRMServerId'])) {
            $model->DRMServerId = $map['DRMServerId'];
        }
        if (isset($map['KeyIds'])) {
            $model->keyIds = $map['KeyIds'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
