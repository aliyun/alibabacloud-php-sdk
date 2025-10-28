<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices\groups;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices\ips;

class listConsumedServices extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $dockerApplication;

    /**
     * @var string
     */
    public $group2Ip;

    /**
     * @var groups
     */
    public $groups;

    /**
     * @var ips
     */
    public $ips;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId' => 'AppId',
        'dockerApplication' => 'DockerApplication',
        'group2Ip' => 'Group2Ip',
        'groups' => 'Groups',
        'ips' => 'Ips',
        'name' => 'Name',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->groups) {
            $this->groups->validate();
        }
        if (null !== $this->ips) {
            $this->ips->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->dockerApplication) {
            $res['DockerApplication'] = $this->dockerApplication;
        }

        if (null !== $this->group2Ip) {
            $res['Group2Ip'] = $this->group2Ip;
        }

        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toArray($noStream) : $this->groups;
        }

        if (null !== $this->ips) {
            $res['Ips'] = null !== $this->ips ? $this->ips->toArray($noStream) : $this->ips;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DockerApplication'])) {
            $model->dockerApplication = $map['DockerApplication'];
        }

        if (isset($map['Group2Ip'])) {
            $model->group2Ip = $map['Group2Ip'];
        }

        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }

        if (isset($map['Ips'])) {
            $model->ips = ips::fromMap($map['Ips']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
