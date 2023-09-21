<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectPluginStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 00_41
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example -2
     *
     * @var string
     */
    public $installCode;

    /**
     * @example driver file not exist
     *
     * @var string
     */
    public $installMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $installed;

    /**
     * @example i-wz92q7m5hsbgfhdss***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportFile;

    /**
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientVersion'  => 'ClientVersion',
        'installCode'    => 'InstallCode',
        'installMessage' => 'InstallMessage',
        'installed'      => 'Installed',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'online'         => 'Online',
        'supportFile'    => 'SupportFile',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->supportFile) {
            $res['SupportFile'] = $this->supportFile;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['SupportFile'])) {
            $model->supportFile = $map['SupportFile'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
