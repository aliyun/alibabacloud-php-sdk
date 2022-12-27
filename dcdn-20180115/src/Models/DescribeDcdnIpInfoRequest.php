<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnIpInfoRequest extends Model
{
    /**
     * @example 10.10.10.10
     *
     * @var string
     */
    public $IP;
    protected $_name = [
        'IP' => 'IP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnIpInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        return $model;
    }
}
