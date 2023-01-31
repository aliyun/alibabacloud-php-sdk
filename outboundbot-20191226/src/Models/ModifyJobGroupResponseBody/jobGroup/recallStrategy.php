<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup;

use AlibabaCloud\Tea\Model;

class recallStrategy extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $emptyNumberIgnore;

    /**
     * @example false
     *
     * @var bool
     */
    public $inArrearsIgnore;

    /**
     * @example false
     *
     * @var bool
     */
    public $outOfServiceIgnore;
    protected $_name = [
        'emptyNumberIgnore'  => 'EmptyNumberIgnore',
        'inArrearsIgnore'    => 'InArrearsIgnore',
        'outOfServiceIgnore' => 'OutOfServiceIgnore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emptyNumberIgnore) {
            $res['EmptyNumberIgnore'] = $this->emptyNumberIgnore;
        }
        if (null !== $this->inArrearsIgnore) {
            $res['InArrearsIgnore'] = $this->inArrearsIgnore;
        }
        if (null !== $this->outOfServiceIgnore) {
            $res['OutOfServiceIgnore'] = $this->outOfServiceIgnore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recallStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmptyNumberIgnore'])) {
            $model->emptyNumberIgnore = $map['EmptyNumberIgnore'];
        }
        if (isset($map['InArrearsIgnore'])) {
            $model->inArrearsIgnore = $map['InArrearsIgnore'];
        }
        if (isset($map['OutOfServiceIgnore'])) {
            $model->outOfServiceIgnore = $map['OutOfServiceIgnore'];
        }

        return $model;
    }
}
