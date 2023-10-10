<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationPeersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1533025590
     *
     * @var string
     */
    public $createTime;

    /**
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @example basic
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 10.0.0.2
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 10.0.0.2
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAnchor;

    /**
     * @example name
     *
     * @var string
     */
    public $organizationPeerName;

    /**
     * @example 1234
     *
     * @var int
     */
    public $port;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'domain'               => 'Domain',
        'instanceType'         => 'InstanceType',
        'internetIp'           => 'InternetIp',
        'intranetIp'           => 'IntranetIp',
        'isAnchor'             => 'IsAnchor',
        'organizationPeerName' => 'OrganizationPeerName',
        'port'                 => 'Port',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->isAnchor) {
            $res['IsAnchor'] = $this->isAnchor;
        }
        if (null !== $this->organizationPeerName) {
            $res['OrganizationPeerName'] = $this->organizationPeerName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['IsAnchor'])) {
            $model->isAnchor = $map['IsAnchor'];
        }
        if (isset($map['OrganizationPeerName'])) {
            $model->organizationPeerName = $map['OrganizationPeerName'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
