<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class SetScdnDDoSInfoRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $elasticBandwidth;
    protected $_name = [
        'elasticBandwidth' => 'ElasticBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetScdnDDoSInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }

        return $model;
    }
}
