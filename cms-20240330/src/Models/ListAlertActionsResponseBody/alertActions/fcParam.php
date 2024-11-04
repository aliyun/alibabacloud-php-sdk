<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class fcParam extends Model
{
    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'function' => 'function',
        'regionId' => 'regionId',
        'service'  => 'service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fcParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['function'])) {
            $model->function = $map['function'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }

        return $model;
    }
}
