<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponseBody\ensRegionIdResources\ensRegionIdResource;

class ensRegionIdResources extends Model
{
    /**
     * @var ensRegionIdResource[]
     */
    public $ensRegionIdResource;
    protected $_name = [
        'ensRegionIdResource' => 'EnsRegionIdResource',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionIdResource)) {
            Model::validateArray($this->ensRegionIdResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensRegionIdResource) {
            if (\is_array($this->ensRegionIdResource)) {
                $res['EnsRegionIdResource'] = [];
                $n1 = 0;
                foreach ($this->ensRegionIdResource as $item1) {
                    $res['EnsRegionIdResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnsRegionIdResource'])) {
            if (!empty($map['EnsRegionIdResource'])) {
                $model->ensRegionIdResource = [];
                $n1 = 0;
                foreach ($map['EnsRegionIdResource'] as $item1) {
                    $model->ensRegionIdResource[$n1] = ensRegionIdResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
