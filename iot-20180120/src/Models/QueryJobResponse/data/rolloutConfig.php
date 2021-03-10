<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data;

use AlibabaCloud\Tea\Model;

class rolloutConfig extends Model
{
    /**
     * @var int
     */
    public $maximumPerMinute;
    protected $_name = [
        'maximumPerMinute' => 'MaximumPerMinute',
    ];

    public function validate()
    {
        Model::validateRequired('maximumPerMinute', $this->maximumPerMinute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rolloutConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }

        return $model;
    }
}
