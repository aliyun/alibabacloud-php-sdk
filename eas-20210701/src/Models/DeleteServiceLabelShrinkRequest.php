<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteServiceLabelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $keysShrink;

    /**
     * @var string
     */
    public $labelKeysShrink;
    protected $_name = [
        'keysShrink' => 'Keys',
        'labelKeysShrink' => 'LabelKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }

        if (null !== $this->labelKeysShrink) {
            $res['LabelKeys'] = $this->labelKeysShrink;
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
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        if (isset($map['LabelKeys'])) {
            $model->labelKeysShrink = $map['LabelKeys'];
        }

        return $model;
    }
}
