<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcProductBandResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $brandIntroduction;

    /**
     * @example android,ios
     *
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $productIntroduction;

    /**
     * @example http://oss.cyzone.cn/2016/1028/20161028040354529.png
     *
     * @var string
     */
    public $productLogo;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productTag;

    /**
     * @example http://bluevr.cn
     *
     * @var string
     */
    public $productWebsite;
    protected $_name = [
        'brandIntroduction'   => 'BrandIntroduction',
        'device'              => 'Device',
        'entName'             => 'EntName',
        'productIntroduction' => 'ProductIntroduction',
        'productLogo'         => 'ProductLogo',
        'productName'         => 'ProductName',
        'productTag'          => 'ProductTag',
        'productWebsite'      => 'ProductWebsite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandIntroduction) {
            $res['BrandIntroduction'] = $this->brandIntroduction;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->productIntroduction) {
            $res['ProductIntroduction'] = $this->productIntroduction;
        }
        if (null !== $this->productLogo) {
            $res['ProductLogo'] = $this->productLogo;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productTag) {
            $res['ProductTag'] = $this->productTag;
        }
        if (null !== $this->productWebsite) {
            $res['ProductWebsite'] = $this->productWebsite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrandIntroduction'])) {
            $model->brandIntroduction = $map['BrandIntroduction'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['ProductIntroduction'])) {
            $model->productIntroduction = $map['ProductIntroduction'];
        }
        if (isset($map['ProductLogo'])) {
            $model->productLogo = $map['ProductLogo'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductTag'])) {
            $model->productTag = $map['ProductTag'];
        }
        if (isset($map['ProductWebsite'])) {
            $model->productWebsite = $map['ProductWebsite'];
        }

        return $model;
    }
}
