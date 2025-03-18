<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\osUpdate\packages;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->packageCount) {
            $res['PackageCount'] = $this->packageCount;
        }
        if (null !== $this->packages) {
            $res['Packages'] = [];
            if (null !== $this->packages && \is_array($this->packages)) {
                $n = 0;
                foreach ($this->packages as $item) {
                    $res['Packages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osUpdate
     */
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
                $n = 0;
                foreach ($map['Packages'] as $item) {
                    $model->packages[$n++] = null !== $item ? packages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
