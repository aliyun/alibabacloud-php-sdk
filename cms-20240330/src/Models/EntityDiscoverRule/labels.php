<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\EntityDiscoverRule;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'op' => 'op',
        'tagKey' => 'tagKey',
        'tagValues' => 'tagValues',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }
        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValues) {
            $res['tagValues'] = $this->tagValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }
        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }
        if (isset($map['tagValues'])) {
            if (!empty($map['tagValues'])) {
                $model->tagValues = $map['tagValues'];
            }
        }

        return $model;
    }
}
