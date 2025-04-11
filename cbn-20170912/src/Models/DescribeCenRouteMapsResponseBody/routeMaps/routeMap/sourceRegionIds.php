<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class sourceRegionIds extends Model
{
    /**
     * @var string[]
     */
    public $sourceRegionId;
    protected $_name = [
        'sourceRegionId' => 'SourceRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->sourceRegionId)) {
            Model::validateArray($this->sourceRegionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceRegionId) {
            if (\is_array($this->sourceRegionId)) {
                $res['SourceRegionId'] = [];
                $n1 = 0;
                foreach ($this->sourceRegionId as $item1) {
                    $res['SourceRegionId'][$n1++] = $item1;
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
        if (isset($map['SourceRegionId'])) {
            if (!empty($map['SourceRegionId'])) {
                $model->sourceRegionId = [];
                $n1 = 0;
                foreach ($map['SourceRegionId'] as $item1) {
                    $model->sourceRegionId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
