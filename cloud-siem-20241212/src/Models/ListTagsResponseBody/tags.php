<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTagsResponseBody;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'count' => 'Count',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
