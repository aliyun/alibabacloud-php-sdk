<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryResponseBody\space\recentList\linkSourceInfo;

use AlibabaCloud\Dara\Model;

class iconUrl extends Model
{
    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $small;
    protected $_name = [
        'line' => 'Line',
        'small' => 'Small',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        if (null !== $this->small) {
            $res['Small'] = $this->small;
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
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        if (isset($map['Small'])) {
            $model->small = $map['Small'];
        }

        return $model;
    }
}
