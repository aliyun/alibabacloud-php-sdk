<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\RestoreRequest;

use AlibabaCloud\Tea\Model;

class jobParameters extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $tier;
    protected $_name = [
        'tier' => 'Tier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tier) {
            $res['Tier'] = $this->tier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tier'])) {
            $model->tier = $map['Tier'];
        }

        return $model;
    }
}
