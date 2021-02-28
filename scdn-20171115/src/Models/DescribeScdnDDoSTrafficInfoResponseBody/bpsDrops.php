<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody;

use AlibabaCloud\Tea\Model;

class bpsDrops extends Model
{
    /**
     * @var string[]
     */
    public $bpsDrop;
    protected $_name = [
        'bpsDrop' => 'BpsDrop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDrop) {
            $res['BpsDrop'] = $this->bpsDrop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsDrops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDrop'])) {
            if (!empty($map['BpsDrop'])) {
                $model->bpsDrop = $map['BpsDrop'];
            }
        }

        return $model;
    }
}
