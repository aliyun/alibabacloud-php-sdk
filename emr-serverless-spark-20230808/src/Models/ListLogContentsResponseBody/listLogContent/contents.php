<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody\listLogContent;

use AlibabaCloud\Dara\Model;

class contents extends Model
{
    /**
     * @var string
     */
    public $lineContent;
    protected $_name = [
        'lineContent' => 'LineContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineContent) {
            $res['LineContent'] = $this->lineContent;
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
        if (isset($map['LineContent'])) {
            $model->lineContent = $map['LineContent'];
        }

        return $model;
    }
}
