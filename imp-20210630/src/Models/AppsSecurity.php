<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AppsSecurity extends Model
{
    /**
     * @var int
     */
    public $playUrlTtl;
    protected $_name = [
        'playUrlTtl' => 'PlayUrlTtl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playUrlTtl) {
            $res['PlayUrlTtl'] = $this->playUrlTtl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppsSecurity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayUrlTtl'])) {
            $model->playUrlTtl = $map['PlayUrlTtl'];
        }

        return $model;
    }
}
