<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class fc3Param extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $function;

    /**
     * @example test
     *
     * @var string
     */
    public $qualifier;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'function' => 'function',
        'qualifier' => 'qualifier',
        'regionId' => 'regionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fc3Param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['function'])) {
            $model->function = $map['function'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
