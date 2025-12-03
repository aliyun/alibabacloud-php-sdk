<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\availableResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\availableResource\supportResources\supportResource;

class supportResources extends Model
{
    /**
     * @var supportResource[]
     */
    public $supportResource;
    protected $_name = [
        'supportResource' => 'SupportResource',
    ];

    public function validate()
    {
        if (\is_array($this->supportResource)) {
            Model::validateArray($this->supportResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportResource) {
            if (\is_array($this->supportResource)) {
                $res['SupportResource'] = [];
                $n1 = 0;
                foreach ($this->supportResource as $item1) {
                    $res['SupportResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportResource'])) {
            if (!empty($map['SupportResource'])) {
                $model->supportResource = [];
                $n1 = 0;
                foreach ($map['SupportResource'] as $item1) {
                    $model->supportResource[$n1] = supportResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
