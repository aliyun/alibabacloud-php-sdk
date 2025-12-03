<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources\masterResource;

class masterResources extends Model
{
    /**
     * @var masterResource[]
     */
    public $masterResource;
    protected $_name = [
        'masterResource' => 'MasterResource',
    ];

    public function validate()
    {
        if (\is_array($this->masterResource)) {
            Model::validateArray($this->masterResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterResource) {
            if (\is_array($this->masterResource)) {
                $res['MasterResource'] = [];
                $n1 = 0;
                foreach ($this->masterResource as $item1) {
                    $res['MasterResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MasterResource'])) {
            if (!empty($map['MasterResource'])) {
                $model->masterResource = [];
                $n1 = 0;
                foreach ($map['MasterResource'] as $item1) {
                    $model->masterResource[$n1] = masterResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
