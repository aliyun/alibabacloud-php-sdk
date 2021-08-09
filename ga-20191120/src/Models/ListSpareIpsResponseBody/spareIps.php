<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponseBody;

use AlibabaCloud\Tea\Model;

class spareIps extends Model
{
    /**
     * @var string
     */
    public $spareIp;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'spareIp' => 'SpareIp',
        'state'   => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spareIp) {
            $res['SpareIp'] = $this->spareIp;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spareIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpareIp'])) {
            $model->spareIp = $map['SpareIp'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
