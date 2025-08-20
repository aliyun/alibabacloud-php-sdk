<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponseBody\tags\polices;

class tags extends Model
{
    /**
     * @var polices[]
     */
    public $polices;

    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'polices' => 'Polices',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->polices)) {
            Model::validateArray($this->polices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polices) {
            if (\is_array($this->polices)) {
                $res['Polices'] = [];
                $n1 = 0;
                foreach ($this->polices as $item1) {
                    $res['Polices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['Polices'])) {
            if (!empty($map['Polices'])) {
                $model->polices = [];
                $n1 = 0;
                foreach ($map['Polices'] as $item1) {
                    $model->polices[$n1] = polices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
