<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRegionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceRegionId'])) {
            if (!empty($map['SourceRegionId'])) {
                $model->sourceRegionId = $map['SourceRegionId'];
            }
        }

        return $model;
    }
}
