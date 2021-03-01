<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateContainerConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $contextPath;

    /**
     * @var int
     */
    public $httpPort;

    /**
     * @var int
     */
    public $maxThreads;

    /**
     * @var string
     */
    public $URIEncoding;

    /**
     * @var bool
     */
    public $useBodyEncoding;
    protected $_name = [
        'appId'           => 'AppId',
        'groupId'         => 'GroupId',
        'contextPath'     => 'ContextPath',
        'httpPort'        => 'HttpPort',
        'maxThreads'      => 'MaxThreads',
        'URIEncoding'     => 'URIEncoding',
        'useBodyEncoding' => 'UseBodyEncoding',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->contextPath) {
            $res['ContextPath'] = $this->contextPath;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->maxThreads) {
            $res['MaxThreads'] = $this->maxThreads;
        }
        if (null !== $this->URIEncoding) {
            $res['URIEncoding'] = $this->URIEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ContextPath'])) {
            $model->contextPath = $map['ContextPath'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['MaxThreads'])) {
            $model->maxThreads = $map['MaxThreads'];
        }
        if (isset($map['URIEncoding'])) {
            $model->URIEncoding = $map['URIEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }

        return $model;
    }
}
