<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ImportUserRequest extends Model
{
    /**
     * @example 10000
     *
     * @var string
     */
    public $authenticationDisplayName;

    /**
     * @example mobile
     *
     * @var string
     */
    public $authenticationType;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoCreateDrive;

    /**
     * @example 10240
     *
     * @var int
     */
    public $driveTotalSize;

    /**
     * @example 1
     *
     * @var string
     */
    public $extra;

    /**
     * @example 130****
     *
     * @var string
     */
    public $identity;

    /**
     * @example pdsuer
     *
     * @var string
     */
    public $nickName;

    /**
     * @example g12
     *
     * @var string
     */
    public $parentGroupId;
    protected $_name = [
        'authenticationDisplayName' => 'authentication_display_name',
        'authenticationType'        => 'authentication_type',
        'autoCreateDrive'           => 'auto_create_drive',
        'driveTotalSize'            => 'drive_total_size',
        'extra'                     => 'extra',
        'identity'                  => 'identity',
        'nickName'                  => 'nick_name',
        'parentGroupId'             => 'parent_group_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ImportUserRequest
     */
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
