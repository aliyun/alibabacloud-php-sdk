<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ImportUserRequest extends Model
{
    /**
     * @var string
     */
    public $authenticationDisplayName;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var bool
     */
    public $autoCreateDrive;

    /**
     * @var int
     */
    public $driveTotalSize;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $parentGroupId;
    protected $_name = [
        'authenticationDisplayName' => 'authentication_display_name',
        'authenticationType' => 'authentication_type',
        'autoCreateDrive' => 'auto_create_drive',
        'driveTotalSize' => 'drive_total_size',
        'extra' => 'extra',
        'identity' => 'identity',
        'nickName' => 'nick_name',
        'parentGroupId' => 'parent_group_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationDisplayName) {
            $res['authentication_display_name'] = $this->authenticationDisplayName;
        }

        if (null !== $this->authenticationType) {
            $res['authentication_type'] = $this->authenticationType;
        }

        if (null !== $this->autoCreateDrive) {
            $res['auto_create_drive'] = $this->autoCreateDrive;
        }

        if (null !== $this->driveTotalSize) {
            $res['drive_total_size'] = $this->driveTotalSize;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->identity) {
            $res['identity'] = $this->identity;
        }

        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }

        if (null !== $this->parentGroupId) {
            $res['parent_group_id'] = $this->parentGroupId;
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
        if (isset($map['authentication_display_name'])) {
            $model->authenticationDisplayName = $map['authentication_display_name'];
        }

        if (isset($map['authentication_type'])) {
            $model->authenticationType = $map['authentication_type'];
        }

        if (isset($map['auto_create_drive'])) {
            $model->autoCreateDrive = $map['auto_create_drive'];
        }

        if (isset($map['drive_total_size'])) {
            $model->driveTotalSize = $map['drive_total_size'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['identity'])) {
            $model->identity = $map['identity'];
        }

        if (isset($map['nick_name'])) {
            $model->nickName = $map['nick_name'];
        }

        if (isset($map['parent_group_id'])) {
            $model->parentGroupId = $map['parent_group_id'];
        }

        return $model;
    }
}
