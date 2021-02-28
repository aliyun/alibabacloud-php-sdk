<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody;

use AlibabaCloud\Tea\Model;

class ppsDrops extends Model
{
    /**
     * @var string[]
     */
    public $ppsDrop;
    protected $_name = [
        'ppsDrop' => 'PpsDrop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ppsDrop) {
            $res['PpsDrop'] = $this->ppsDrop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ppsDrops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PpsDrop'])) {
            if (!empty($map['PpsDrop'])) {
                $model->ppsDrop = $map['PpsDrop'];
            }
        }

        return $model;
    }
}
