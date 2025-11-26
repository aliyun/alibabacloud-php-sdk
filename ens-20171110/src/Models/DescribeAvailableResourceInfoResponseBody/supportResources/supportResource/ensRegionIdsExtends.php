<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIdsExtends\ensRegionId;

class ensRegionIdsExtends extends Model
{
    /**
     * @var ensRegionId[]
     */
    public $ensRegionId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionId)) {
            Model::validateArray($this->ensRegionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            if (\is_array($this->ensRegionId)) {
                $res['EnsRegionId'] = [];
                $n1 = 0;
                foreach ($this->ensRegionId as $item1) {
                    $res['EnsRegionId'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnsRegionId'])) {
            if (!empty($map['EnsRegionId'])) {
                $model->ensRegionId = [];
                $n1 = 0;
                foreach ($map['EnsRegionId'] as $item1) {
                    $model->ensRegionId[$n1] = ensRegionId::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
