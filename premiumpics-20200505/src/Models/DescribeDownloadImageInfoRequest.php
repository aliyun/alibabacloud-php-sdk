<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadImageInfoRequest extends Model
{
    /**
     * @example P20220627101248000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 2
     *
     * @var string
     */
    public $downloadType;

    /**
     * @example h5568374035170305
     *
     * @var string
     */
    public $imageId;

    /**
     * @description ImageUserBuyId
     *
     * @example ImageUserBuyId
     *
     * @var int
     */
    public $imageUserBuyId;

    /**
     * @var string
     */
    public $specificationName;
    protected $_name = [
        'bizId'             => 'BizId',
        'downloadType'      => 'DownloadType',
        'imageId'           => 'ImageId',
        'imageUserBuyId'    => 'ImageUserBuyId',
        'specificationName' => 'SpecificationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->downloadType) {
            $res['DownloadType'] = $this->downloadType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUserBuyId) {
            $res['ImageUserBuyId'] = $this->imageUserBuyId;
        }
        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadImageInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DownloadType'])) {
            $model->downloadType = $map['DownloadType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUserBuyId'])) {
            $model->imageUserBuyId = $map['ImageUserBuyId'];
        }
        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }

        return $model;
    }
}
