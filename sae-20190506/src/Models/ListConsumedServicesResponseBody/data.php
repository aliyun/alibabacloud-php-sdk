<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListConsumedServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example b2a8a925-477a-4ed7-b825-d5e22500****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The subscription address of the service.
     *
     * @example {}
     *
     * @var string
     */
    public $group2Ip;

    /**
     * @description The version of the published service
     *
     * @var string[]
     */
    public $groups;

    /**
     * @description The name of the published service.
     *
     * @var string[]
     */
    public $ips;

    /**
     * @description The returned error code. Valid values:
     *
     *   If the call is successful, the **ErrorCode** parameter is not returned.
     *   If the call fails, the **ErrorCode** parameter is returned. For more information, see the "**Error codes**" section of this topic.
     *
     * @example com.alibaba.nodejs.ItemService
     *
     * @var string
     */
    public $name;

    /**
     * @description The service group that corresponds to the published service.
     *
     * @example RPC
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the application.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'    => 'AppId',
        'group2Ip' => 'Group2Ip',
        'groups'   => 'Groups',
        'ips'      => 'Ips',
        'name'     => 'Name',
        'type'     => 'Type',
        'version'  => 'Version',
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
        if (null !== $this->group2Ip) {
            $res['Group2Ip'] = $this->group2Ip;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Group2Ip'])) {
            $model->group2Ip = $map['Group2Ip'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = $map['Groups'];
            }
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
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
