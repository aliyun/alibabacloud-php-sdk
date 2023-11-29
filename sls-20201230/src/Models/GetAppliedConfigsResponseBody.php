<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetAppliedConfigsResponseBody extends Model
{
    /**
     * @description The names of the Logtail configurations.
     *
     * @var string[]
     */
    public $configs;

    /**
     * @description The number of Logtail configurations.
     *
     * @example 2
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'configs' => 'configs',
        'count'   => 'count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['configs'] = $this->configs;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppliedConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = $map['configs'];
            }
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        return $model;
    }
}
