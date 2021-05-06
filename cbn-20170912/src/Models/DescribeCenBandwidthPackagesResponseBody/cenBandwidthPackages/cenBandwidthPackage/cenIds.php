<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage;

use AlibabaCloud\Tea\Model;

class cenIds extends Model
{
    /**
     * @var string[]
     */
    public $cenId;
    protected $_name = [
        'cenId' => 'CenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            if (!empty($map['CenId'])) {
                $model->cenId = $map['CenId'];
            }
        }

        return $model;
    }
}
