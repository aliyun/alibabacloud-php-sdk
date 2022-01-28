<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Tea\Model;

class bandwidthTypes extends Model
{
    /**
     * @var string[]
     */
    public $bandwidthType;
    protected $_name = [
        'bandwidthType' => 'BandwidthType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthType'])) {
            if (!empty($map['BandwidthType'])) {
                $model->bandwidthType = $map['BandwidthType'];
            }
        }

        return $model;
    }
}
