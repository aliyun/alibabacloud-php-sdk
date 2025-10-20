<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class StartTaskForDistributeImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $destinationRegionList;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $retryType;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'destinationRegionList' => 'DestinationRegionList',
        'imageId' => 'ImageId',
        'productType' => 'ProductType',
        'retryType' => 'RetryType',
        'sourceRegion' => 'SourceRegion',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationRegionList)) {
            Model::validateArray($this->destinationRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionList) {
            if (\is_array($this->destinationRegionList)) {
                $res['DestinationRegionList'] = [];
                $n1 = 0;
                foreach ($this->destinationRegionList as $item1) {
                    $res['DestinationRegionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }

        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['DestinationRegionList'])) {
            if (!empty($map['DestinationRegionList'])) {
                $model->destinationRegionList = [];
                $n1 = 0;
                foreach ($map['DestinationRegionList'] as $item1) {
                    $model->destinationRegionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }

        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
