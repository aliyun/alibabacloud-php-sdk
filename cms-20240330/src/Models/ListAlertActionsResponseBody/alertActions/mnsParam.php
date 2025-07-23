<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class mnsParam extends Model
{
    /**
     * @example queue
     *
     * @var string
     */
    public $mnsType;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'mnsType' => 'mnsType',
        'name' => 'name',
        'regionId' => 'regionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mnsType) {
            $res['mnsType'] = $this->mnsType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mnsParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mnsType'])) {
            $model->mnsType = $map['mnsType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
