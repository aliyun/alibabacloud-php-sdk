<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListUserDrawRecordByPkRequest extends Model
{
    /**
     * @example 1789095186553536
     *
     * @var string
     */
    public $aliyunPk;

    /**
     * @example task_group_0000
     *
     * @var string
     */
    public $drawGroup;

    /**
     * @example developer-award-draw-pool_123
     *
     * @var string
     */
    public $drawPoolName;
    protected $_name = [
        'aliyunPk'     => 'aliyunPk',
        'drawGroup'    => 'drawGroup',
        'drawPoolName' => 'drawPoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['aliyunPk'] = $this->aliyunPk;
        }
        if (null !== $this->drawGroup) {
            $res['drawGroup'] = $this->drawGroup;
        }
        if (null !== $this->drawPoolName) {
            $res['drawPoolName'] = $this->drawPoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserDrawRecordByPkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunPk'])) {
            $model->aliyunPk = $map['aliyunPk'];
        }
        if (isset($map['drawGroup'])) {
            $model->drawGroup = $map['drawGroup'];
        }
        if (isset($map['drawPoolName'])) {
            $model->drawPoolName = $map['drawPoolName'];
        }

        return $model;
    }
}
