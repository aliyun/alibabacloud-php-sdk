<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcRequest\vpcs;

class BindZoneVpcRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var vpcs[]
     */
    public $vpcs;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'vpcs' => 'Vpcs',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->vpcs)) {
            Model::validateArray($this->vpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vpcs)) {
                $res['Vpcs'] = [];
                $n1 = 0;
                foreach ($this->vpcs as $item1) {
                    $res['Vpcs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Vpcs'] as $item1) {
                    $model->vpcs[$n1] = vpcs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
