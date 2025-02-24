<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeRequest;

use AlibabaCloud\Dara\Model;

class privatePoolOptions extends Model
{
    /**
     * @var string[]
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->id)) {
            Model::validateArray($this->id);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            if (\is_array($this->id)) {
                $res['Id'] = [];
                $n1        = 0;
                foreach ($this->id as $item1) {
                    $res['Id'][$n1++] = $item1;
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
        if (isset($map['Id'])) {
            if (!empty($map['Id'])) {
                $model->id = [];
                $n1        = 0;
                foreach ($map['Id'] as $item1) {
                    $model->id[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
