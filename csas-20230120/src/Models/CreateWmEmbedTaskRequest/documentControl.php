<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl;

class documentControl extends Model
{
    /**
     * @var backgroundControl
     */
    public $backgroundControl;

    /**
     * @var bool
     */
    public $invisibleAntiAllCopy;

    /**
     * @var bool
     */
    public $invisibleAntiTextCopy;
    protected $_name = [
        'backgroundControl' => 'BackgroundControl',
        'invisibleAntiAllCopy' => 'InvisibleAntiAllCopy',
        'invisibleAntiTextCopy' => 'InvisibleAntiTextCopy',
    ];

    public function validate()
    {
        if (null !== $this->backgroundControl) {
            $this->backgroundControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundControl) {
            $res['BackgroundControl'] = null !== $this->backgroundControl ? $this->backgroundControl->toArray($noStream) : $this->backgroundControl;
        }

        if (null !== $this->invisibleAntiAllCopy) {
            $res['InvisibleAntiAllCopy'] = $this->invisibleAntiAllCopy;
        }

        if (null !== $this->invisibleAntiTextCopy) {
            $res['InvisibleAntiTextCopy'] = $this->invisibleAntiTextCopy;
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
        if (isset($map['BackgroundControl'])) {
            $model->backgroundControl = backgroundControl::fromMap($map['BackgroundControl']);
        }

        if (isset($map['InvisibleAntiAllCopy'])) {
            $model->invisibleAntiAllCopy = $map['InvisibleAntiAllCopy'];
        }

        if (isset($map['InvisibleAntiTextCopy'])) {
            $model->invisibleAntiTextCopy = $map['InvisibleAntiTextCopy'];
        }

        return $model;
    }
}
