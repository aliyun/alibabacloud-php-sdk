<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifySupabaseProjectSecurityIpsRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var bool
     */
    public $updateDb;

    /**
     * @var bool
     */
    public $updateWeb;
    protected $_name = [
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'securityIPList' => 'SecurityIPList',
        'updateDb' => 'UpdateDb',
        'updateWeb' => 'UpdateWeb',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->updateDb) {
            $res['UpdateDb'] = $this->updateDb;
        }

        if (null !== $this->updateWeb) {
            $res['UpdateWeb'] = $this->updateWeb;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['UpdateDb'])) {
            $model->updateDb = $map['UpdateDb'];
        }

        if (isset($map['UpdateWeb'])) {
            $model->updateWeb = $map['UpdateWeb'];
        }

        return $model;
    }
}
