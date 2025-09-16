<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\videoControl;

use AlibabaCloud\Dara\Model;

class metadataControl extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $xmpKvBase64;
    protected $_name = [
        'enable' => 'Enable',
        'xmpKvBase64' => 'XmpKvBase64',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->xmpKvBase64) {
            $res['XmpKvBase64'] = $this->xmpKvBase64;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['XmpKvBase64'])) {
            $model->xmpKvBase64 = $map['XmpKvBase64'];
        }

        return $model;
    }
}
