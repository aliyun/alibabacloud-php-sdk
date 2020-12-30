<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagExpressConnectInterfaceListResponseBody;

use AlibabaCloud\Tea\Model;

class interfaces extends Model
{
    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $vlan;

    /**
     * @var string
     */
    public $IP;
    protected $_name = [
        'mask' => 'Mask',
        'vlan' => 'Vlan',
        'IP'   => 'IP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->vlan) {
            $res['Vlan'] = $this->vlan;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        return $model;
    }
}
