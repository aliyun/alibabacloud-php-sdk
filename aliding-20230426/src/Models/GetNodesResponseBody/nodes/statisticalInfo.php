<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesResponseBody\nodes;

use AlibabaCloud\Dara\Model;

class statisticalInfo extends Model
{
    /**
     * @var int
     */
    public $wordCount;
    protected $_name = [
        'wordCount' => 'WordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
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
        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}
