<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody\manifest;

use AlibabaCloud\Dara\Model;

class assertions extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'data' => 'Data',
        'label' => 'Label',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
