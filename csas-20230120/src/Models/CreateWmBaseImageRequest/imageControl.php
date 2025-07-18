<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest\imageControl\logoVisibleControl;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest\imageControl\textVisibleControl;
use AlibabaCloud\Tea\Model;

class imageControl extends Model
{
    /**
     * @var logoVisibleControl
     */
    public $logoVisibleControl;

    /**
     * @var textVisibleControl
     */
    public $textVisibleControl;
    protected $_name = [
        'logoVisibleControl' => 'LogoVisibleControl',
        'textVisibleControl' => 'TextVisibleControl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoVisibleControl) {
            $res['LogoVisibleControl'] = null !== $this->logoVisibleControl ? $this->logoVisibleControl->toMap() : null;
        }
        if (null !== $this->textVisibleControl) {
            $res['TextVisibleControl'] = null !== $this->textVisibleControl ? $this->textVisibleControl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoVisibleControl'])) {
            $model->logoVisibleControl = logoVisibleControl::fromMap($map['LogoVisibleControl']);
        }
        if (isset($map['TextVisibleControl'])) {
            $model->textVisibleControl = textVisibleControl::fromMap($map['TextVisibleControl']);
        }

        return $model;
    }
}
