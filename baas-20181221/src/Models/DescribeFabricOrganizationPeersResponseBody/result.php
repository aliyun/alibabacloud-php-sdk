<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationPeersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isAnchor;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $organizationPeerName;

    /**
     * @var string
     */
    public $intranetIp;
    protected $_name = [
        'updateTime'           => 'UpdateTime',
        'domain'               => 'Domain',
        'internetIp'           => 'InternetIp',
        'createTime'           => 'CreateTime',
        'isAnchor'             => 'IsAnchor',
        'instanceType'         => 'InstanceType',
        'port'                 => 'Port',
        'organizationPeerName' => 'OrganizationPeerName',
        'intranetIp'           => 'IntranetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isAnchor) {
            $res['IsAnchor'] = $this->isAnchor;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->organizationPeerName) {
            $res['OrganizationPeerName'] = $this->organizationPeerName;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsAnchor'])) {
            $model->isAnchor = $map['IsAnchor'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['OrganizationPeerName'])) {
            $model->organizationPeerName = $map['OrganizationPeerName'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        return $model;
    }
}
