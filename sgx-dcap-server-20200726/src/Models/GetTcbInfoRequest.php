<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models;

use AlibabaCloud\Tea\Model;

class GetTcbInfoRequest extends Model
{
    /**
     * @example 00706a100000
     *
     * @var string
     */
    public $fmspc;
    protected $_name = [
        'fmspc' => 'fmspc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fmspc) {
            $res['fmspc'] = $this->fmspc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTcbInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fmspc'])) {
            $model->fmspc = $map['fmspc'];
        }

        return $model;
    }
}
