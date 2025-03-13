<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ConfigADConnectorUserRequest extends Model
{
    /**
     * @description The password of the AD user that has the permissions to join computers to domains.
     *
     * This parameter is required.
     * @example testPassword
     *
     * @var string
     */
    public $domainPassword;

    /**
     * @description The username of the AD user that has the permissions to join computers to domains.
     *
     * This parameter is required.
     * @example Administrator
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description The name of the OU in the AD domain. You can call the [ListUserAdOrganizationUnits](https://help.aliyun.com/document_detail/311259.html) to obtain the OU name.
     *
     * @example example.com/Domain Controllers
     *
     * @var string
     */
    public $OUName;

    /**
     * @description The ID of the AD workspace.
     *
     * This parameter is required.
     * @example cn-hangzhou+dir-778418****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'OUName'         => 'OUName',
        'officeSiteId'   => 'OfficeSiteId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }
        if (null !== $this->OUName) {
            $res['OUName'] = $this->OUName;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigADConnectorUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }
        if (isset($map['OUName'])) {
            $model->OUName = $map['OUName'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
