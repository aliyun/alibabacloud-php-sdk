<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryRequest;

use AlibabaCloud\Tea\Model;

class cover extends Model
{
    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'URI' => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cover
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
