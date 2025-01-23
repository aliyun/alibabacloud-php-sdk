<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponseBody\hanaRestore\hanaRestores;

class hanaRestore extends Model
{
    /**
     * @var hanaRestores[]
     */
    public $hanaRestores;
    protected $_name = [
        'hanaRestores' => 'HanaRestores',
    ];

    public function validate()
    {
        if (\is_array($this->hanaRestores)) {
            Model::validateArray($this->hanaRestores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hanaRestores) {
            if (\is_array($this->hanaRestores)) {
                $res['HanaRestores'] = [];
                $n1                  = 0;
                foreach ($this->hanaRestores as $item1) {
                    $res['HanaRestores'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HanaRestores'])) {
            if (!empty($map['HanaRestores'])) {
                $model->hanaRestores = [];
                $n1                  = 0;
                foreach ($map['HanaRestores'] as $item1) {
                    $model->hanaRestores[$n1++] = hanaRestores::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
