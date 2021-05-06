<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class sourceInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $sourceInstanceId;
    protected $_name = [
        'sourceInstanceId' => 'SourceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceInstanceId'])) {
            if (!empty($map['SourceInstanceId'])) {
                $model->sourceInstanceId = $map['SourceInstanceId'];
            }
        }

        return $model;
    }
}
