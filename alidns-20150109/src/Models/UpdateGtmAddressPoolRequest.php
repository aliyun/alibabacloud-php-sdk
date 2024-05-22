<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolRequest\addr;
use AlibabaCloud\Tea\Model;

class UpdateGtmAddressPoolRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var addr[]
     */
    public $addr;

    /**
     * @description The ID of the address pool that you want to modify.
     *
     * This parameter is required.
     * @example 1234abc
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The language used by the user.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The minimum number of available addresses in the address pool.
     *
     * @example 2
     *
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @description The name of the address pool that you want to modify.
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the address pool that you want to modify.
     *
     * This parameter is required.
     * @example IP
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = [];
            if (null !== $this->addr && \is_array($this->addr)) {
                $n = 0;
                foreach ($this->addr as $item) {
                    $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n           = 0;
                foreach ($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
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
