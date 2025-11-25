<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyResponseBody;

use AlibabaCloud\Dara\Model;

class tagKeys extends Model
{
    /**
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'tagKey' => 'TagKey',
    ];

    public function validate()
    {
        if (\is_array($this->tagKey)) {
            Model::validateArray($this->tagKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagKey) {
            if (\is_array($this->tagKey)) {
                $res['TagKey'] = [];
                $n1 = 0;
                foreach ($this->tagKey as $item1) {
                    $res['TagKey'][$n1] = $item1;
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
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = [];
                $n1 = 0;
                foreach ($map['TagKey'] as $item1) {
                    $model->tagKey[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
