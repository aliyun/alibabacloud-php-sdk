<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ImageInsight extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'caption' => 'Caption',
        'description' => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
