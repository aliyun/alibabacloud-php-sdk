<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\InterruptForArbitrationRequest;

use AlibabaCloud\Dara\Model;

class interrupt extends Model
{
    /**
     * @var bool
     */
    public $submit;
    protected $_name = [
        'submit' => 'Submit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->submit) {
            $res['Submit'] = $this->submit;
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
        if (isset($map['Submit'])) {
            $model->submit = $map['Submit'];
        }

        return $model;
    }
}
