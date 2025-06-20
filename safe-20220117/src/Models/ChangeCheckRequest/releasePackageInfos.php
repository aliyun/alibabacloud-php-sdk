<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest;

use AlibabaCloud\Dara\Model;

class releasePackageInfos extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string[]
     */
    public $releasePackage;
    protected $_name = [
        'productCode' => 'ProductCode',
        'releasePackage' => 'ReleasePackage',
    ];

    public function validate()
    {
        if (\is_array($this->releasePackage)) {
            Model::validateArray($this->releasePackage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->releasePackage) {
            if (\is_array($this->releasePackage)) {
                $res['ReleasePackage'] = [];
                $n1 = 0;
                foreach ($this->releasePackage as $item1) {
                    $res['ReleasePackage'][$n1] = $item1;
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
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ReleasePackage'])) {
            if (!empty($map['ReleasePackage'])) {
                $model->releasePackage = [];
                $n1 = 0;
                foreach ($map['ReleasePackage'] as $item1) {
                    $model->releasePackage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
