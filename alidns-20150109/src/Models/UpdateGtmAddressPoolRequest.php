<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolRequest\addr;

class UpdateGtmAddressPoolRequest extends Model
{
    /**
     * @var addr[]
     */
    public $addr;
    /**
     * @var string
     */
    public $addrPoolId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $minAvailableAddrNum;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'addr'                => 'Addr',
        'addrPoolId'          => 'AddrPoolId',
        'lang'                => 'Lang',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'name'                => 'Name',
        'type'                => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->addr)) {
            Model::validateArray($this->addr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            if (\is_array($this->addr)) {
                $res['Addr'] = [];
                $n1          = 0;
                foreach ($this->addr as $item1) {
                    $res['Addr'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n1          = 0;
                foreach ($map['Addr'] as $item1) {
                    $model->addr[$n1++] = addr::fromMap($item1);
                }
            }
        }

        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
