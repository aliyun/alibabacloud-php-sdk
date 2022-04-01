<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class AvailableAZ extends Model
{
    /**
     * @description az
     *
     * @var string
     */
    public $availableAZs;
    protected $_name = [
        'availableAZs' => 'availableAZs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAZs) {
            $res['availableAZs'] = $this->availableAZs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AvailableAZ
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['availableAZs'])) {
            $model->availableAZs = $map['availableAZs'];
        }

        return $model;
    }
}
