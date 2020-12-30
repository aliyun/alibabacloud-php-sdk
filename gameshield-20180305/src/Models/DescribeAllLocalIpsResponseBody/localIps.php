<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAllLocalIpsResponseBody;

use AlibabaCloud\Tea\Model;

class localIps extends Model
{
    /**
     * @var string[]
     */
    public $bgp;

    /**
     * @var string[]
     */
    public $gf;
    protected $_name = [
        'bgp' => 'Bgp',
        'gf'  => 'Gf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgp) {
            $res['Bgp'] = $this->bgp;
        }
        if (null !== $this->gf) {
            $res['Gf'] = $this->gf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bgp'])) {
            if (!empty($map['Bgp'])) {
                $model->bgp = $map['Bgp'];
            }
        }
        if (isset($map['Gf'])) {
            if (!empty($map['Gf'])) {
                $model->gf = $map['Gf'];
            }
        }

        return $model;
    }
}
