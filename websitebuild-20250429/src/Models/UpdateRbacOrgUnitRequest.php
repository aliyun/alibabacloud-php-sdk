<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class UpdateRbacOrgUnitRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $orgUnitData;

    /**
     * @var string
     */
    public $orgUnitId;
    protected $_name = [
        'bizId' => 'BizId',
        'orgUnitData' => 'OrgUnitData',
        'orgUnitId' => 'OrgUnitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->orgUnitData) {
            $res['OrgUnitData'] = $this->orgUnitData;
        }

        if (null !== $this->orgUnitId) {
            $res['OrgUnitId'] = $this->orgUnitId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['OrgUnitData'])) {
            $model->orgUnitData = $map['OrgUnitData'];
        }

        if (isset($map['OrgUnitId'])) {
            $model->orgUnitId = $map['OrgUnitId'];
        }

        return $model;
    }
}
