<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiInfoByName extends Model
{
    /**
     * @example gw-xx
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example test-api
     *
     * @var string
     */
    public $name;

    /**
     * @example Http
     *
     * @var string
     */
    public $type;

    /**
     * @example true
     *
     * @var bool
     */
    public $versionEnabled;

    /**
     * @var HttpApiApiInfo[]
     */
    public $versionedHttpApis;
    protected $_name = [
        'gatewayId' => 'GatewayId',
        'name' => 'name',
        'type' => 'type',
        'versionEnabled' => 'versionEnabled',
        'versionedHttpApis' => 'versionedHttpApis',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->versionEnabled) {
            $res['versionEnabled'] = $this->versionEnabled;
        }
        if (null !== $this->versionedHttpApis) {
            $res['versionedHttpApis'] = [];
            if (null !== $this->versionedHttpApis && \is_array($this->versionedHttpApis)) {
                $n = 0;
                foreach ($this->versionedHttpApis as $item) {
                    $res['versionedHttpApis'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiInfoByName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['versionEnabled'])) {
            $model->versionEnabled = $map['versionEnabled'];
        }
        if (isset($map['versionedHttpApis'])) {
            if (!empty($map['versionedHttpApis'])) {
                $model->versionedHttpApis = [];
                $n = 0;
                foreach ($map['versionedHttpApis'] as $item) {
                    $model->versionedHttpApis[$n++] = null !== $item ? HttpApiApiInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
