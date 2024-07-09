<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcRequest\vpcs;
use AlibabaCloud\Tea\Model;

class BindZoneVpcRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 6447728c8578e66aacf062d2df4446dc
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The IP address of the client.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The information about VPCs.
     *
     * @var vpcs[]
     */
    public $vpcs;

    /**
     * @description The global ID of the zone.
     *
     * This parameter is required.
     * @example AgIDE0OQ_149
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
        'vpcs'         => 'Vpcs',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->vpcs) {
            $res['Vpcs'] = [];
            if (null !== $this->vpcs && \is_array($this->vpcs)) {
                $n = 0;
                foreach ($this->vpcs as $item) {
                    $res['Vpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindZoneVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Vpcs'])) {
            if (!empty($map['Vpcs'])) {
                $model->vpcs = [];
                $n           = 0;
                foreach ($map['Vpcs'] as $item) {
                    $model->vpcs[$n++] = null !== $item ? vpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
