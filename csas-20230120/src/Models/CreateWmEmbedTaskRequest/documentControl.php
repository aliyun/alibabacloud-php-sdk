<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\documentControl\backgroundControl;
use AlibabaCloud\Tea\Model;

class documentControl extends Model
{
    /**
     * @var backgroundControl
     */
    public $backgroundControl;

    /**
     * @example true
     *
     * @var bool
     */
    public $invisibleAntiAllCopy;

    /**
     * @example true
     *
     * @var bool
     */
    public $invisibleAntiTextCopy;
    protected $_name = [
        'backgroundControl'     => 'BackgroundControl',
        'invisibleAntiAllCopy'  => 'InvisibleAntiAllCopy',
        'invisibleAntiTextCopy' => 'InvisibleAntiTextCopy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundControl) {
            $res['BackgroundControl'] = null !== $this->backgroundControl ? $this->backgroundControl->toMap() : null;
        }
        if (null !== $this->invisibleAntiAllCopy) {
            $res['InvisibleAntiAllCopy'] = $this->invisibleAntiAllCopy;
        }
        if (null !== $this->invisibleAntiTextCopy) {
            $res['InvisibleAntiTextCopy'] = $this->invisibleAntiTextCopy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documentControl
     */
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
