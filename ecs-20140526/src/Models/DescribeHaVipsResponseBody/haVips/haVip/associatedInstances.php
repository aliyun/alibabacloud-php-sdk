<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip;

use AlibabaCloud\Dara\Model;

class associatedInstances extends Model
{
    /**
     * @var string[]
     */
    public $associatedInstance;
    protected $_name = [
        'associatedInstance' => 'associatedInstance',
    ];

    public function validate()
    {
        if (\is_array($this->associatedInstance)) {
            Model::validateArray($this->associatedInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedInstance) {
            if (\is_array($this->associatedInstance)) {
                $res['associatedInstance'] = [];
                $n1                        = 0;
                foreach ($this->associatedInstance as $item1) {
                    $res['associatedInstance'][$n1++] = $item1;
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
        if (isset($map['associatedInstance'])) {
            if (!empty($map['associatedInstance'])) {
                $model->associatedInstance = [];
                $n1                        = 0;
                foreach ($map['associatedInstance'] as $item1) {
                    $model->associatedInstance[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
