<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateSystemPropertyTemplateRequest\systemPropertyInfo\customPropertyInfos;

class systemPropertyInfo extends Model
{
    /**
     * @var customPropertyInfos[]
     */
    public $customPropertyInfos;

    /**
     * @var string
     */
    public $roBootloader;

    /**
     * @var string
     */
    public $roBuildDisplayId;

    /**
     * @var string
     */
    public $roBuildFingerprint;

    /**
     * @var string
     */
    public $roBuildHost;

    /**
     * @var string
     */
    public $roBuildId;

    /**
     * @var string
     */
    public $roBuildProduct;

    /**
     * @var string
     */
    public $roBuildTags;

    /**
     * @var string
     */
    public $roBuildType;

    /**
     * @var string
     */
    public $roBuildUser;

    /**
     * @var string
     */
    public $roProductBoard;

    /**
     * @var string
     */
    public $roProductBrand;

    /**
     * @var string
     */
    public $roProductDevice;

    /**
     * @var string
     */
    public $roProductManufacturer;

    /**
     * @var string
     */
    public $roProductModel;

    /**
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

    public function validate()
    {
        if (\is_array($this->customPropertyInfos)) {
            Model::validateArray($this->customPropertyInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPropertyInfos) {
            if (\is_array($this->customPropertyInfos)) {
                $res['CustomPropertyInfos'] = [];
                $n1 = 0;
                foreach ($this->customPropertyInfos as $item1) {
                    $res['CustomPropertyInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomPropertyInfos'])) {
            if (!empty($map['CustomPropertyInfos'])) {
                $model->customPropertyInfos = [];
                $n1 = 0;
                foreach ($map['CustomPropertyInfos'] as $item1) {
                    $model->customPropertyInfos[$n1] = customPropertyInfos::fromMap($item1);
                    ++$n1;
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
