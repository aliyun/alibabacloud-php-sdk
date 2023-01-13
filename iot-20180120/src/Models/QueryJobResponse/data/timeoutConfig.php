<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data;

use AlibabaCloud\Tea\Model;

class timeoutConfig extends Model
{
    /**
     * @var int
     */
    public $inProgressTimeoutInMinutes;
    protected $_name = [
        'inProgressTimeoutInMinutes' => 'InProgressTimeoutInMinutes',
    ];

    public function validate()
    {
        Model::validateRequired('inProgressTimeoutInMinutes', $this->inProgressTimeoutInMinutes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inProgressTimeoutInMinutes) {
            $res['InProgressTimeoutInMinutes'] = $this->inProgressTimeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeoutConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InProgressTimeoutInMinutes'])) {
            $model->inProgressTimeoutInMinutes = $map['InProgressTimeoutInMinutes'];
        }

        return $model;
    }
}
