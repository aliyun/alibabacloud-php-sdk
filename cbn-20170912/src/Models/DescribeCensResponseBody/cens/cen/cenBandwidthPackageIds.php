<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens\cen;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->cenBandwidthPackageId)) {
            Model::validateArray($this->cenBandwidthPackageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenBandwidthPackageId) {
            if (\is_array($this->cenBandwidthPackageId)) {
                $res['CenBandwidthPackageId'] = [];
                $n1 = 0;
                foreach ($this->cenBandwidthPackageId as $item1) {
                    $res['CenBandwidthPackageId'][$n1++] = $item1;
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
        if (isset($map['CenBandwidthPackageId'])) {
            if (!empty($map['CenBandwidthPackageId'])) {
                $model->cenBandwidthPackageId = [];
                $n1 = 0;
                foreach ($map['CenBandwidthPackageId'] as $item1) {
                    $model->cenBandwidthPackageId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
