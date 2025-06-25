<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\osUpdate\packages;

class osUpdate extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var int
     */
    public $packageCount;

    /**
     * @var packages[]
     */
    public $packages;
    protected $_name = [
        'checkId' => 'CheckId',
        'packageCount' => 'PackageCount',
        'packages' => 'Packages',
    ];

    public function validate()
    {
        if (\is_array($this->packages)) {
            Model::validateArray($this->packages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->packageCount) {
            $res['PackageCount'] = $this->packageCount;
        }

        if (null !== $this->packages) {
            if (\is_array($this->packages)) {
                $res['Packages'] = [];
                $n1 = 0;
                foreach ($this->packages as $item1) {
                    $res['Packages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['PackageCount'])) {
            $model->packageCount = $map['PackageCount'];
        }

        if (isset($map['Packages'])) {
            if (!empty($map['Packages'])) {
                $model->packages = [];
                $n1 = 0;
                foreach ($map['Packages'] as $item1) {
                    $model->packages[$n1] = packages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
