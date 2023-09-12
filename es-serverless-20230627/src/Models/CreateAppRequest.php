<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\authentication;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\network;
use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @description 应用名
     *
     * @example es-severless-test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @var authentication
     */
    public $authentication;

    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description 应用备注
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @var network[]
     */
    public $network;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 7.10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appName'        => 'appName',
        'authentication' => 'authentication',
        'chargeType'     => 'chargeType',
        'description'    => 'description',
        'network'        => 'network',
        'regionId'       => 'regionId',
        'version'        => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toMap() : null;
        }
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->network) {
            $res['network'] = [];
            if (null !== $this->network && \is_array($this->network)) {
                $n = 0;
                foreach ($this->network as $item) {
                    $res['network'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = authentication::fromMap($map['authentication']);
        }
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['network'])) {
            if (!empty($map['network'])) {
                $model->network = [];
                $n              = 0;
                foreach ($map['network'] as $item) {
                    $model->network[$n++] = null !== $item ? network::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
