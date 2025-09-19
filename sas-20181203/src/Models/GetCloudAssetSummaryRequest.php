<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryRequest\cloudAssetTypes;

class GetCloudAssetSummaryRequest extends Model
{
    /**
     * @var cloudAssetTypes[]
     */
    public $cloudAssetTypes;

    /**
     * @var int[]
     */
    public $vendors;
    protected $_name = [
        'cloudAssetTypes' => 'CloudAssetTypes',
        'vendors' => 'Vendors',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAssetTypes)) {
            Model::validateArray($this->cloudAssetTypes);
        }
        if (\is_array($this->vendors)) {
            Model::validateArray($this->vendors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAssetTypes) {
            if (\is_array($this->cloudAssetTypes)) {
                $res['CloudAssetTypes'] = [];
                $n1 = 0;
                foreach ($this->cloudAssetTypes as $item1) {
                    $res['CloudAssetTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vendors) {
            if (\is_array($this->vendors)) {
                $res['Vendors'] = [];
                $n1 = 0;
                foreach ($this->vendors as $item1) {
                    $res['Vendors'][$n1] = $item1;
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
        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n1 = 0;
                foreach ($map['CloudAssetTypes'] as $item1) {
                    $model->cloudAssetTypes[$n1] = cloudAssetTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = [];
                $n1 = 0;
                foreach ($map['Vendors'] as $item1) {
                    $model->vendors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
