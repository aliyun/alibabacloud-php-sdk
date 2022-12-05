<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogoResponseBody extends Model
{
    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $colorDescription;

    /**
     * @var string
     */
    public $colorOne;

    /**
     * @var string
     */
    public $colorThree;

    /**
     * @var string
     */
    public $colorTwo;

    /**
     * @var string
     */
    public $fontDescription;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var string
     */
    public $namePath;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'brandName'        => 'BrandName',
        'colorDescription' => 'ColorDescription',
        'colorOne'         => 'ColorOne',
        'colorThree'       => 'ColorThree',
        'colorTwo'         => 'ColorTwo',
        'fontDescription'  => 'FontDescription',
        'images'           => 'Images',
        'namePath'         => 'NamePath',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->colorDescription) {
            $res['ColorDescription'] = $this->colorDescription;
        }
        if (null !== $this->colorOne) {
            $res['ColorOne'] = $this->colorOne;
        }
        if (null !== $this->colorThree) {
            $res['ColorThree'] = $this->colorThree;
        }
        if (null !== $this->colorTwo) {
            $res['ColorTwo'] = $this->colorTwo;
        }
        if (null !== $this->fontDescription) {
            $res['FontDescription'] = $this->fontDescription;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->namePath) {
            $res['NamePath'] = $this->namePath;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['ColorDescription'])) {
            $model->colorDescription = $map['ColorDescription'];
        }
        if (isset($map['ColorOne'])) {
            $model->colorOne = $map['ColorOne'];
        }
        if (isset($map['ColorThree'])) {
            $model->colorThree = $map['ColorThree'];
        }
        if (isset($map['ColorTwo'])) {
            $model->colorTwo = $map['ColorTwo'];
        }
        if (isset($map['FontDescription'])) {
            $model->fontDescription = $map['FontDescription'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = $map['Images'];
            }
        }
        if (isset($map['NamePath'])) {
            $model->namePath = $map['NamePath'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
