<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Dara\Model;

class ability extends Model
{
    /**
     * @var string[]
     */
    public $ability;
    protected $_name = [
        'ability' => 'Ability',
    ];

    public function validate()
    {
        if (\is_array($this->ability)) {
            Model::validateArray($this->ability);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ability) {
            if (\is_array($this->ability)) {
                $res['Ability'] = [];
                $n1 = 0;
                foreach ($this->ability as $item1) {
                    $res['Ability'][$n1] = $item1;
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
        if (isset($map['Ability'])) {
            if (!empty($map['Ability'])) {
                $model->ability = [];
                $n1 = 0;
                foreach ($map['Ability'] as $item1) {
                    $model->ability[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
