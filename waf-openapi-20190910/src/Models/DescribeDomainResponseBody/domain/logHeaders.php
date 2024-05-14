<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain;

use AlibabaCloud\Tea\Model;

class logHeaders extends Model
{
    /**
     * @example ALIWAF-TAG
     *
     * @var string
     */
    public $k;

    /**
     * @example Yes
     *
     * @var string
     */
    public $v;
    protected $_name = [
        'k' => 'k',
        'v' => 'v',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k) {
            $res['k'] = $this->k;
        }
        if (null !== $this->v) {
            $res['v'] = $this->v;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['k'])) {
            $model->k = $map['k'];
        }
        if (isset($map['v'])) {
            $model->v = $map['v'];
        }

        return $model;
    }
}
