<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources;

use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\osUpdate\packages;
use AlibabaCloud\Tea\Model;

class osUpdate extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $kbListString;

    /**
     * @var int
     */
    public $packageCount;

    /**
     * @var packages[]
     */
    public $packages;

    /**
     * @var string
     */
    public $updateCatalogUrl;
    protected $_name = [
        'checkId' => 'CheckId',
        'kbListString' => 'KbListString',
        'packageCount' => 'PackageCount',
        'packages' => 'Packages',
        'updateCatalogUrl' => 'UpdateCatalogUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->kbListString) {
            $res['KbListString'] = $this->kbListString;
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
        if (null !== $this->updateCatalogUrl) {
            $res['UpdateCatalogUrl'] = $this->updateCatalogUrl;
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
        if (isset($map['KbListString'])) {
            $model->kbListString = $map['KbListString'];
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
        if (isset($map['UpdateCatalogUrl'])) {
            $model->updateCatalogUrl = $map['UpdateCatalogUrl'];
        }

        return $model;
    }
}
