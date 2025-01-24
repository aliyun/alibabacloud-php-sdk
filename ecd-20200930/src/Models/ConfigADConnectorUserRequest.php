<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ConfigADConnectorUserRequest extends Model
{
    /**
     * @var string
     */
    public $domainPassword;
    /**
     * @var string
     */
    public $domainUserName;
    /**
     * @var string
     */
    public $OUName;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
