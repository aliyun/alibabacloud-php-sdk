<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateRequest;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateRequest\systemPropertyInfo\customPropertyInfos;
use AlibabaCloud\Tea\Model;

class systemPropertyInfo extends Model
{
    /**
     * @var customPropertyInfos[]
     */
    public $customPropertyInfos;

    /**
     * @example null
     *
     * @var string
     */
    public $roBootloader;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildDisplayId;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildFingerprint;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildHost;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildId;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildProduct;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildTags;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildType;

    /**
     * @example null
     *
     * @var string
     */
    public $roBuildUser;

    /**
     * @example null
     *
     * @var string
     */
    public $roProductBoard;

    /**
     * @example null
     *
     * @var string
     */
    public $roProductBrand;

    /**
     * @example null
     *
     * @var string
     */
    public $roProductDevice;

    /**
     * @example null
     *
     * @var string
     */
    public $roProductManufacturer;

    /**
     * @example null
     *
     * @var string
     */
    public $roProductModel;

    /**
     * @example null
     *
     * @var string
     */
    public $rwRoSerialNo;
    protected $_name = [
        'customPropertyInfos' => 'CustomPropertyInfos',
        'roBootloader' => 'RoBootloader',
        'roBuildDisplayId' => 'RoBuildDisplayId',
        'roBuildFingerprint' => 'RoBuildFingerprint',
        'roBuildHost' => 'RoBuildHost',
        'roBuildId' => 'RoBuildId',
        'roBuildProduct' => 'RoBuildProduct',
        'roBuildTags' => 'RoBuildTags',
        'roBuildType' => 'RoBuildType',
        'roBuildUser' => 'RoBuildUser',
        'roProductBoard' => 'RoProductBoard',
        'roProductBrand' => 'RoProductBrand',
        'roProductDevice' => 'RoProductDevice',
        'roProductManufacturer' => 'RoProductManufacturer',
        'roProductModel' => 'RoProductModel',
        'rwRoSerialNo' => 'RwRoSerialNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPropertyInfos) {
            $res['CustomPropertyInfos'] = [];
            if (null !== $this->customPropertyInfos && \is_array($this->customPropertyInfos)) {
                $n = 0;
                foreach ($this->customPropertyInfos as $item) {
                    $res['CustomPropertyInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roBootloader) {
            $res['RoBootloader'] = $this->roBootloader;
        }
        if (null !== $this->roBuildDisplayId) {
            $res['RoBuildDisplayId'] = $this->roBuildDisplayId;
        }
        if (null !== $this->roBuildFingerprint) {
            $res['RoBuildFingerprint'] = $this->roBuildFingerprint;
        }
        if (null !== $this->roBuildHost) {
            $res['RoBuildHost'] = $this->roBuildHost;
        }
        if (null !== $this->roBuildId) {
            $res['RoBuildId'] = $this->roBuildId;
        }
        if (null !== $this->roBuildProduct) {
            $res['RoBuildProduct'] = $this->roBuildProduct;
        }
        if (null !== $this->roBuildTags) {
            $res['RoBuildTags'] = $this->roBuildTags;
        }
        if (null !== $this->roBuildType) {
            $res['RoBuildType'] = $this->roBuildType;
        }
        if (null !== $this->roBuildUser) {
            $res['RoBuildUser'] = $this->roBuildUser;
        }
        if (null !== $this->roProductBoard) {
            $res['RoProductBoard'] = $this->roProductBoard;
        }
        if (null !== $this->roProductBrand) {
            $res['RoProductBrand'] = $this->roProductBrand;
        }
        if (null !== $this->roProductDevice) {
            $res['RoProductDevice'] = $this->roProductDevice;
        }
        if (null !== $this->roProductManufacturer) {
            $res['RoProductManufacturer'] = $this->roProductManufacturer;
        }
        if (null !== $this->roProductModel) {
            $res['RoProductModel'] = $this->roProductModel;
        }
        if (null !== $this->rwRoSerialNo) {
            $res['RwRoSerialNo'] = $this->rwRoSerialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemPropertyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomPropertyInfos'])) {
            if (!empty($map['CustomPropertyInfos'])) {
                $model->customPropertyInfos = [];
                $n = 0;
                foreach ($map['CustomPropertyInfos'] as $item) {
                    $model->customPropertyInfos[$n++] = null !== $item ? customPropertyInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RoBootloader'])) {
            $model->roBootloader = $map['RoBootloader'];
        }
        if (isset($map['RoBuildDisplayId'])) {
            $model->roBuildDisplayId = $map['RoBuildDisplayId'];
        }
        if (isset($map['RoBuildFingerprint'])) {
            $model->roBuildFingerprint = $map['RoBuildFingerprint'];
        }
        if (isset($map['RoBuildHost'])) {
            $model->roBuildHost = $map['RoBuildHost'];
        }
        if (isset($map['RoBuildId'])) {
            $model->roBuildId = $map['RoBuildId'];
        }
        if (isset($map['RoBuildProduct'])) {
            $model->roBuildProduct = $map['RoBuildProduct'];
        }
        if (isset($map['RoBuildTags'])) {
            $model->roBuildTags = $map['RoBuildTags'];
        }
        if (isset($map['RoBuildType'])) {
            $model->roBuildType = $map['RoBuildType'];
        }
        if (isset($map['RoBuildUser'])) {
            $model->roBuildUser = $map['RoBuildUser'];
        }
        if (isset($map['RoProductBoard'])) {
            $model->roProductBoard = $map['RoProductBoard'];
        }
        if (isset($map['RoProductBrand'])) {
            $model->roProductBrand = $map['RoProductBrand'];
        }
        if (isset($map['RoProductDevice'])) {
            $model->roProductDevice = $map['RoProductDevice'];
        }
        if (isset($map['RoProductManufacturer'])) {
            $model->roProductManufacturer = $map['RoProductManufacturer'];
        }
        if (isset($map['RoProductModel'])) {
            $model->roProductModel = $map['RoProductModel'];
        }
        if (isset($map['RwRoSerialNo'])) {
            $model->rwRoSerialNo = $map['RwRoSerialNo'];
        }

        return $model;
    }
}
