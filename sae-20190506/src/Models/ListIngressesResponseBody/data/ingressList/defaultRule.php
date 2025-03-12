<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList;

use AlibabaCloud\Tea\Model;

class defaultRule extends Model
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
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort'   => 'ContainerPort',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultRule
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

        return $model;
    }
}
