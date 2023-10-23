<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcRequest\vpcs;
use AlibabaCloud\Tea\Model;

class BindZoneVpcRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @var vpcs[]
     */
    public $vpcs;

    /**
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
