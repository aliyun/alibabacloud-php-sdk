<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class additionalInfo extends Model
{
    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $enableHighDensityMode;
    protected $_name = [
        'enableHighDensityMode' => 'EnableHighDensityMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableHighDensityMode) {
            $res['EnableHighDensityMode'] = $this->enableHighDensityMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableHighDensityMode'])) {
            $model->enableHighDensityMode = $map['EnableHighDensityMode'];
        }

        return $model;
    }
}
