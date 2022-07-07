<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $backendProtocol;

    /**
     * @var int
     */
    public $containerPort;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort'   => 'ContainerPort',
        'domain'          => 'Domain',
        'path'            => 'Path',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->backendProtocol) {
            $res['BackendProtocol'] = $this->backendProtocol;
        }
        if (null !== $this->containerPort) {
            $res['ContainerPort'] = $this->containerPort;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BackendProtocol'])) {
            $model->backendProtocol = $map['BackendProtocol'];
        }
        if (isset($map['ContainerPort'])) {
            $model->containerPort = $map['ContainerPort'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
