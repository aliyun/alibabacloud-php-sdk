<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices\groups;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices\ips;
use AlibabaCloud\Tea\Model;

class listConsumedServices extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example a5281053-08e4-47a5-b2ab-5c0323de7b5a
     *
     * @var string
     */
    public $appId;

    /**
     * @description Indicates whether the application runs in a Docker container. Valid values:
     *
     *   true: The application runs in a Docker container.
     *   false: The application does not run in a Docker container.
     *
     * @example true
     *
     * @var bool
     */
    public $dockerApplication;

    /**
     * @description A reserved parameter.
     *
     * @example ""
     *
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
     * @description The name of the consumed service.
     *
     * @example service
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the consumed service.
     *
     * @example HSF
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the consumed service.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'             => 'AppId',
        'dockerApplication' => 'DockerApplication',
        'group2Ip'          => 'Group2Ip',
        'groups'            => 'Groups',
        'ips'               => 'Ips',
        'name'              => 'Name',
        'type'              => 'Type',
        'version'           => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->ips) {
            $res['Ips'] = null !== $this->ips ? $this->ips->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return listConsumedServices
     */
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
