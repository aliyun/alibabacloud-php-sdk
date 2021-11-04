<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxiesResponseBody;

use AlibabaCloud\Tea\Model;

class proxyList extends Model
{
    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $httpsPort;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $mysqlPort;

    /**
     * @var bool
     */
    public $privateEnable;

    /**
     * @var string
     */
    public $privateHost;

    /**
     * @var int
     */
    public $proxyId;

    /**
     * @var bool
     */
    public $publicEnable;

    /**
     * @var string
     */
    public $publicHost;
    protected $_name = [
        'creatorId'     => 'CreatorId',
        'creatorName'   => 'CreatorName',
        'httpsPort'     => 'HttpsPort',
        'instanceId'    => 'InstanceId',
        'mysqlPort'     => 'MysqlPort',
        'privateEnable' => 'PrivateEnable',
        'privateHost'   => 'PrivateHost',
        'proxyId'       => 'ProxyId',
        'publicEnable'  => 'PublicEnable',
        'publicHost'    => 'PublicHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mysqlPort) {
            $res['MysqlPort'] = $this->mysqlPort;
        }
        if (null !== $this->privateEnable) {
            $res['PrivateEnable'] = $this->privateEnable;
        }
        if (null !== $this->privateHost) {
            $res['PrivateHost'] = $this->privateHost;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->publicEnable) {
            $res['PublicEnable'] = $this->publicEnable;
        }
        if (null !== $this->publicHost) {
            $res['PublicHost'] = $this->publicHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MysqlPort'])) {
            $model->mysqlPort = $map['MysqlPort'];
        }
        if (isset($map['PrivateEnable'])) {
            $model->privateEnable = $map['PrivateEnable'];
        }
        if (isset($map['PrivateHost'])) {
            $model->privateHost = $map['PrivateHost'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['PublicEnable'])) {
            $model->publicEnable = $map['PublicEnable'];
        }
        if (isset($map['PublicHost'])) {
            $model->publicHost = $map['PublicHost'];
        }

        return $model;
    }
}
