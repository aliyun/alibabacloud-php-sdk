<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl\bgInvisibleControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl\bgVisibleControl;
use AlibabaCloud\Tea\Model;

class backgroundControl extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $bgAddInvisible;

    /**
     * @example true
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgAddInvisible) {
            $res['BgAddInvisible'] = $this->bgAddInvisible;
        }
        if (null !== $this->bgAddVisible) {
            $res['BgAddVisible'] = $this->bgAddVisible;
        }
        if (null !== $this->bgInvisibleControl) {
            $res['BgInvisibleControl'] = null !== $this->bgInvisibleControl ? $this->bgInvisibleControl->toMap() : null;
        }
        if (null !== $this->bgVisibleControl) {
            $res['BgVisibleControl'] = null !== $this->bgVisibleControl ? $this->bgVisibleControl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backgroundControl
     */
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
