<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl\bgInvisibleControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl\bgVisibleControl;

class backgroundControl extends Model
{
    /**
     * @var bool
     */
    public $bgAddInvisible;
    /**
     * @var bool
     */
    public $bgAddVisible;
    /**
     * @var bgInvisibleControl
     */
    public $bgInvisibleControl;
    /**
     * @var bgVisibleControl
     */
    public $bgVisibleControl;
    protected $_name = [
        'bgAddInvisible'     => 'BgAddInvisible',
        'bgAddVisible'       => 'BgAddVisible',
        'bgInvisibleControl' => 'BgInvisibleControl',
        'bgVisibleControl'   => 'BgVisibleControl',
    ];

    public function validate()
    {
        if (null !== $this->bgInvisibleControl) {
            $this->bgInvisibleControl->validate();
        }
        if (null !== $this->bgVisibleControl) {
            $this->bgVisibleControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgAddInvisible) {
            $res['BgAddInvisible'] = $this->bgAddInvisible;
        }

        if (null !== $this->bgAddVisible) {
            $res['BgAddVisible'] = $this->bgAddVisible;
        }

        if (null !== $this->bgInvisibleControl) {
            $res['BgInvisibleControl'] = null !== $this->bgInvisibleControl ? $this->bgInvisibleControl->toArray($noStream) : $this->bgInvisibleControl;
        }

        if (null !== $this->bgVisibleControl) {
            $res['BgVisibleControl'] = null !== $this->bgVisibleControl ? $this->bgVisibleControl->toArray($noStream) : $this->bgVisibleControl;
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
        if (isset($map['BgAddInvisible'])) {
            $model->bgAddInvisible = $map['BgAddInvisible'];
        }

        if (isset($map['BgAddVisible'])) {
            $model->bgAddVisible = $map['BgAddVisible'];
        }

        if (isset($map['BgInvisibleControl'])) {
            $model->bgInvisibleControl = bgInvisibleControl::fromMap($map['BgInvisibleControl']);
        }

        if (isset($map['BgVisibleControl'])) {
            $model->bgVisibleControl = bgVisibleControl::fromMap($map['BgVisibleControl']);
        }

        return $model;
    }
}
