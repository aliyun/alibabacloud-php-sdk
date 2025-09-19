<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectPluginStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $installCode;

    /**
     * @var string
     */
    public $installMessage;

    /**
     * @var bool
     */
    public $installed;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var bool
     */
    public $supportFile;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientVersion' => 'ClientVersion',
        'installCode' => 'InstallCode',
        'installMessage' => 'InstallMessage',
        'installed' => 'Installed',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'online' => 'Online',
        'platform' => 'Platform',
        'supportFile' => 'SupportFile',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->installCode) {
            $res['InstallCode'] = $this->installCode;
        }

        if (null !== $this->installMessage) {
            $res['InstallMessage'] = $this->installMessage;
        }

        if (null !== $this->installed) {
            $res['Installed'] = $this->installed;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->supportFile) {
            $res['SupportFile'] = $this->supportFile;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['InstallCode'])) {
            $model->installCode = $map['InstallCode'];
        }

        if (isset($map['InstallMessage'])) {
            $model->installMessage = $map['InstallMessage'];
        }

        if (isset($map['Installed'])) {
            $model->installed = $map['Installed'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['SupportFile'])) {
            $model->supportFile = $map['SupportFile'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
