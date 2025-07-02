<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class AddLabelsRequest extends Model
{
    /**
     * @var string
     */
    public $labelContents;
    protected $_name = [
        'labelContents' => 'LabelContents',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelContents) {
            $res['LabelContents'] = $this->labelContents;
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
        if (isset($map['LabelContents'])) {
            $model->labelContents = $map['LabelContents'];
        }

        return $model;
    }
}
