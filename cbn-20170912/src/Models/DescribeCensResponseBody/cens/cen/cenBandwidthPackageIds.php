<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen;

use AlibabaCloud\Tea\Model;

class cenBandwidthPackageIds extends Model
{
    /**
     * @var string[]
     */
    public $cenBandwidthPackageId;
    protected $_name = [
        'cenBandwidthPackageId' => 'CenBandwidthPackageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenBandwidthPackageIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenBandwidthPackageId'])) {
            if (!empty($map['CenBandwidthPackageId'])) {
                $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
            }
        }

        return $model;
    }
}
