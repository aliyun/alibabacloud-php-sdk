<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupResponseBody\stats;
use AlibabaCloud\Tea\Model;

class DescribeGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliasId;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $gbIp;

    /**
     * @var int
     */
    public $gbPort;

    /**
     * @var string[]
     */
    public $gbTcpPorts;

    /**
     * @var string[]
     */
    public $gbUdpPorts;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inProtocol;

    /**
     * @var bool
     */
    public $lazyPull;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stats
     */
    public $stats;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliasId'     => 'AliasId',
        'app'         => 'App',
        'callback'    => 'Callback',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'enabled'     => 'Enabled',
        'gbId'        => 'GbId',
        'gbIp'        => 'GbIp',
        'gbPort'      => 'GbPort',
        'gbTcpPorts'  => 'GbTcpPorts',
        'gbUdpPorts'  => 'GbUdpPorts',
        'id'          => 'Id',
        'inProtocol'  => 'InProtocol',
        'lazyPull'    => 'LazyPull',
        'name'        => 'Name',
        'outProtocol' => 'OutProtocol',
        'playDomain'  => 'PlayDomain',
        'pushDomain'  => 'PushDomain',
        'region'      => 'Region',
        'requestId'   => 'RequestId',
        'stats'       => 'Stats',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasId) {
            $res['AliasId'] = $this->aliasId;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->gbIp) {
            $res['GbIp'] = $this->gbIp;
        }
        if (null !== $this->gbPort) {
            $res['GbPort'] = $this->gbPort;
        }
        if (null !== $this->gbTcpPorts) {
            $res['GbTcpPorts'] = $this->gbTcpPorts;
        }
        if (null !== $this->gbUdpPorts) {
            $res['GbUdpPorts'] = $this->gbUdpPorts;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inProtocol) {
            $res['InProtocol'] = $this->inProtocol;
        }
        if (null !== $this->lazyPull) {
            $res['LazyPull'] = $this->lazyPull;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stats) {
            $res['Stats'] = null !== $this->stats ? $this->stats->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasId'])) {
            $model->aliasId = $map['AliasId'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['GbIp'])) {
            $model->gbIp = $map['GbIp'];
        }
        if (isset($map['GbPort'])) {
            $model->gbPort = $map['GbPort'];
        }
        if (isset($map['GbTcpPorts'])) {
            if (!empty($map['GbTcpPorts'])) {
                $model->gbTcpPorts = $map['GbTcpPorts'];
            }
        }
        if (isset($map['GbUdpPorts'])) {
            if (!empty($map['GbUdpPorts'])) {
                $model->gbUdpPorts = $map['GbUdpPorts'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InProtocol'])) {
            $model->inProtocol = $map['InProtocol'];
        }
        if (isset($map['LazyPull'])) {
            $model->lazyPull = $map['LazyPull'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stats'])) {
            $model->stats = stats::fromMap($map['Stats']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
