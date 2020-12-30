<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder\addr\street;
use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @var string
     */
    public $cc;

    /**
     * @var string
     */
    public $sp;

    /**
     * @var string
     */
    public $pc;

    /**
     * @var string
     */
    public $city;

    /**
     * @var street
     */
    public $street;
    protected $_name = [
        'cc'     => 'Cc',
        'sp'     => 'Sp',
        'pc'     => 'Pc',
        'city'   => 'City',
        'street' => 'Street',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cc) {
            $res['Cc'] = $this->cc;
        }
        if (null !== $this->sp) {
            $res['Sp'] = $this->sp;
        }
        if (null !== $this->pc) {
            $res['Pc'] = $this->pc;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->street) {
            $res['Street'] = null !== $this->street ? $this->street->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cc'])) {
            $model->cc = $map['Cc'];
        }
        if (isset($map['Sp'])) {
            $model->sp = $map['Sp'];
        }
        if (isset($map['Pc'])) {
            $model->pc = $map['Pc'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Street'])) {
            $model->street = street::fromMap($map['Street']);
        }

        return $model;
    }
}
