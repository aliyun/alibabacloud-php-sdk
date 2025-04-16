<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponseBody\vpcs\vpc;

class vpcs extends Model
{
    /**
     * @var vpc[]
     */
    public $vpc;
    protected $_name = [
        'vpc' => 'Vpc',
    ];

    public function validate()
    {
        if (\is_array($this->vpc)) {
            Model::validateArray($this->vpc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpc) {
            if (\is_array($this->vpc)) {
                $res['Vpc'] = [];
                $n1 = 0;
                foreach ($this->vpc as $item1) {
                    $res['Vpc'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Vpc'])) {
            if (!empty($map['Vpc'])) {
                $model->vpc = [];
                $n1 = 0;
                foreach ($map['Vpc'] as $item1) {
                    $model->vpc[$n1++] = vpc::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
