<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string[]
     */
    public $instance;
    protected $_name = [
        'instance' => 'Instance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = $map['Instance'];
            }
        }

        return $model;
    }
}
