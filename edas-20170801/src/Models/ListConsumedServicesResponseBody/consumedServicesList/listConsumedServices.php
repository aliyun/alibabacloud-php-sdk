<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices\groups;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices\ips;
use AlibabaCloud\Tea\Model;

class listConsumedServices extends Model
{
    /**
     * @var bool
     */
    public $dockerApplication;

    /**
     * @var string
     */
    public $type;

    /**
     * @var groups
     */
    public $groups;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $group2Ip;

    /**
     * @var ips
     */
    public $ips;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'dockerApplication' => 'DockerApplication',
        'type'              => 'Type',
        'groups'            => 'Groups',
        'version'           => 'Version',
        'appId'             => 'AppId',
        'group2Ip'          => 'Group2Ip',
        'ips'               => 'Ips',
        'name'              => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dockerApplication) {
            $res['DockerApplication'] = $this->dockerApplication;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->group2Ip) {
            $res['Group2Ip'] = $this->group2Ip;
        }
        if (null !== $this->ips) {
            $res['Ips'] = null !== $this->ips ? $this->ips->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listConsumedServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DockerApplication'])) {
            $model->dockerApplication = $map['DockerApplication'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Group2Ip'])) {
            $model->group2Ip = $map['Group2Ip'];
        }
        if (isset($map['Ips'])) {
            $model->ips = ips::fromMap($map['Ips']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
