<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetProvisionConfigRequest extends Model
{
    /**
     * @description 预留的目标资源个数
     *
     * @var int
     */
    public $target;

    /**
     * @description 别名名称
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'target'    => 'target',
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProvisionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
