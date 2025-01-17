<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->cenId)) {
            Model::validateArray($this->cenId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            if (\is_array($this->cenId)) {
                $res['CenId'] = [];
                $n1           = 0;
                foreach ($this->cenId as $item1) {
                    $res['CenId'][$n1++] = $item1;
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
        if (isset($map['CenId'])) {
            if (!empty($map['CenId'])) {
                $model->cenId = [];
                $n1           = 0;
                foreach ($map['CenId'] as $item1) {
                    $model->cenId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
