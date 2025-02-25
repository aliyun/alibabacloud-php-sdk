<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources\osUpdate\packages;

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
        'checkId'          => 'CheckId',
        'kbListString'     => 'KbListString',
        'packageCount'     => 'PackageCount',
        'packages'         => 'Packages',
        'updateCatalogUrl' => 'UpdateCatalogUrl',
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

        if (null !== $this->kbListString) {
            $res['KbListString'] = $this->kbListString;
        }

        if (null !== $this->packageCount) {
            $res['PackageCount'] = $this->packageCount;
        }

        if (null !== $this->packages) {
            if (\is_array($this->packages)) {
                $res['Packages'] = [];
                $n1              = 0;
                foreach ($this->packages as $item1) {
                    $res['Packages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateCatalogUrl) {
            $res['UpdateCatalogUrl'] = $this->updateCatalogUrl;
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

        if (isset($map['KbListString'])) {
            $model->kbListString = $map['KbListString'];
        }

        if (isset($map['PackageCount'])) {
            $model->packageCount = $map['PackageCount'];
        }

        if (isset($map['Packages'])) {
            if (!empty($map['Packages'])) {
                $model->packages = [];
                $n1              = 0;
                foreach ($map['Packages'] as $item1) {
                    $model->packages[$n1++] = packages::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateCatalogUrl'])) {
            $model->updateCatalogUrl = $map['UpdateCatalogUrl'];
        }

        return $model;
    }
}
