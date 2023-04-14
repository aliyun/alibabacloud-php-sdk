<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class GetSampleRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $withExtendParmas;
    protected $_name = [
        'withExtendParmas' => 'withExtendParmas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withExtendParmas) {
            $res['withExtendParmas'] = $this->withExtendParmas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withExtendParmas'])) {
            $model->withExtendParmas = $map['withExtendParmas'];
        }

        return $model;
    }
}
