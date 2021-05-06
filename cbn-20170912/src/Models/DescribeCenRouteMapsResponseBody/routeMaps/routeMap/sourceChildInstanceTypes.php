<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class sourceChildInstanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $sourceChildInstanceType;
    protected $_name = [
        'sourceChildInstanceType' => 'SourceChildInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceChildInstanceType) {
            $res['SourceChildInstanceType'] = $this->sourceChildInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceChildInstanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceChildInstanceType'])) {
            if (!empty($map['SourceChildInstanceType'])) {
                $model->sourceChildInstanceType = $map['SourceChildInstanceType'];
            }
        }

        return $model;
    }
}
