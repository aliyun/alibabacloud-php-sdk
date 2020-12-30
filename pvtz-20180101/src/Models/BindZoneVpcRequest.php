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
    public $lang;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var vpcs[]
     */
    public $vpcs;
    protected $_name = [
        'lang'         => 'Lang',
        'zoneId'       => 'ZoneId',
        'userClientIp' => 'UserClientIp',
        'vpcs'         => 'Vpcs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
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

        return $model;
    }
}
