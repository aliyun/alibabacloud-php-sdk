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
    public $app;

    /**
     * @var string
     */
    public $inProtocol;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $gbUdpPorts;

    /**
     * @var int
     */
    public $captureInterval;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $aliasId;

    /**
     * @var int
     */
    public $captureImage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $captureOssPath;

    /**
     * @var string
     */
    public $gbIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $lazyPull;

    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var int
     */
    public $gbPort;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var int
     */
    public $captureVideo;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var stats
     */
    public $stats;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $captureOssBucket;

    /**
     * @var string[]
     */
    public $gbTcpPorts;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'app'              => 'App',
        'inProtocol'       => 'InProtocol',
        'description'      => 'Description',
        'createdTime'      => 'CreatedTime',
        'name'             => 'Name',
        'gbUdpPorts'       => 'GbUdpPorts',
        'captureInterval'  => 'CaptureInterval',
        'gbId'             => 'GbId',
        'pushDomain'       => 'PushDomain',
        'aliasId'          => 'AliasId',
        'captureImage'     => 'CaptureImage',
        'status'           => 'Status',
        'captureOssPath'   => 'CaptureOssPath',
        'gbIp'             => 'GbIp',
        'requestId'        => 'RequestId',
        'enabled'          => 'Enabled',
        'lazyPull'         => 'LazyPull',
        'outProtocol'      => 'OutProtocol',
        'gbPort'           => 'GbPort',
        'callback'         => 'Callback',
        'captureVideo'     => 'CaptureVideo',
        'playDomain'       => 'PlayDomain',
        'stats'            => 'Stats',
        'region'           => 'Region',
        'captureOssBucket' => 'CaptureOssBucket',
        'gbTcpPorts'       => 'GbTcpPorts',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->inProtocol) {
            $res['InProtocol'] = $this->inProtocol;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->gbUdpPorts) {
            $res['GbUdpPorts'] = $this->gbUdpPorts;
        }
        if (null !== $this->captureInterval) {
            $res['CaptureInterval'] = $this->captureInterval;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }
        if (null !== $this->aliasId) {
            $res['AliasId'] = $this->aliasId;
        }
        if (null !== $this->captureImage) {
            $res['CaptureImage'] = $this->captureImage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->captureOssPath) {
            $res['CaptureOssPath'] = $this->captureOssPath;
        }
        if (null !== $this->gbIp) {
            $res['GbIp'] = $this->gbIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->lazyPull) {
            $res['LazyPull'] = $this->lazyPull;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->gbPort) {
            $res['GbPort'] = $this->gbPort;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->captureVideo) {
            $res['CaptureVideo'] = $this->captureVideo;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->stats) {
            $res['Stats'] = null !== $this->stats ? $this->stats->toMap() : null;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->captureOssBucket) {
            $res['CaptureOssBucket'] = $this->captureOssBucket;
        }
        if (null !== $this->gbTcpPorts) {
            $res['GbTcpPorts'] = $this->gbTcpPorts;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['InProtocol'])) {
            $model->inProtocol = $map['InProtocol'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GbUdpPorts'])) {
            if (!empty($map['GbUdpPorts'])) {
                $model->gbUdpPorts = $map['GbUdpPorts'];
            }
        }
        if (isset($map['CaptureInterval'])) {
            $model->captureInterval = $map['CaptureInterval'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }
        if (isset($map['AliasId'])) {
            $model->aliasId = $map['AliasId'];
        }
        if (isset($map['CaptureImage'])) {
            $model->captureImage = $map['CaptureImage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CaptureOssPath'])) {
            $model->captureOssPath = $map['CaptureOssPath'];
        }
        if (isset($map['GbIp'])) {
            $model->gbIp = $map['GbIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['LazyPull'])) {
            $model->lazyPull = $map['LazyPull'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['GbPort'])) {
            $model->gbPort = $map['GbPort'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CaptureVideo'])) {
            $model->captureVideo = $map['CaptureVideo'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['Stats'])) {
            $model->stats = stats::fromMap($map['Stats']);
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['CaptureOssBucket'])) {
            $model->captureOssBucket = $map['CaptureOssBucket'];
        }
        if (isset($map['GbTcpPorts'])) {
            if (!empty($map['GbTcpPorts'])) {
                $model->gbTcpPorts = $map['GbTcpPorts'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
