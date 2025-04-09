<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup;

use AlibabaCloud\Dara\Model;

class recallStrategy extends Model
{
    /**
     * @var bool
     */
    public $emptyNumberIgnore;

    /**
     * @var bool
     */
    public $inArrearsIgnore;

    /**
     * @var bool
     */
    public $outOfServiceIgnore;
    protected $_name = [
        'emptyNumberIgnore' => 'EmptyNumberIgnore',
        'inArrearsIgnore' => 'InArrearsIgnore',
        'outOfServiceIgnore' => 'OutOfServiceIgnore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
