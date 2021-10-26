<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetAccountSettingsResponseBody extends Model
{
    /**
     * @description 可用区列表
     *
     * @var string[]
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
     * @return GetAccountSettingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['availableAZs'])) {
            if (!empty($map['availableAZs'])) {
                $model->availableAZs = $map['availableAZs'];
            }
        }

        return $model;
    }
}
