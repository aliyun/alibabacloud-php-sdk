<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobPasswordRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description Specifies the database to which the password belongs. Valid values:
     *
     *   **src**: source database
     *   **dest**: destination database
     *
     * >  This parameter must be specified.
     * @example src
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The new password of the account.
     *
     * >  This parameter must be specified and cannot be the same as the current password.
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the region where the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The account of the source or destination database.
     *
     * >  This parameter must be specified.
     * @example dtstest
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dtsJobId' => 'DtsJobId',
        'endpoint' => 'Endpoint',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
