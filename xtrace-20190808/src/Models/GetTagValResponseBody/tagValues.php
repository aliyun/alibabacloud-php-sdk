<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValResponseBody;

use AlibabaCloud\Dara\Model;

class tagValues extends Model
{
    /**
     * @var string[]
     */
    public $tagValue;
    protected $_name = [
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        if (\is_array($this->tagValue)) {
            Model::validateArray($this->tagValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagValue) {
            if (\is_array($this->tagValue)) {
                $res['TagValue'] = [];
                $n1 = 0;
                foreach ($this->tagValue as $item1) {
                    $res['TagValue'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TagValue'])) {
            if (!empty($map['TagValue'])) {
                $model->tagValue = [];
                $n1 = 0;
                foreach ($map['TagValue'] as $item1) {
                    $model->tagValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
