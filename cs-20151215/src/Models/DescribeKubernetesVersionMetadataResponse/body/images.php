<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse\body;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example centos_7_7_x64_20G_alibase_20200426.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example CentOS 7.7
     *
     * @var string
     */
    public $imageName;

    /**
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @example 7.7
     *
     * @var string
     */
    public $osVersion;

    /**
     * @example centos_7_7_20
     *
     * @var string
     */
    public $imageType;

    /**
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @example system
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @example x86_64
     *
     * @var string
     */
    public $architecture;
    protected $_name = [
        'imageId'       => 'image_id',
        'imageName'     => 'image_name',
        'platform'      => 'platform',
        'osVersion'     => 'os_version',
        'imageType'     => 'image_type',
        'osType'        => 'os_type',
        'imageCategory' => 'image_category',
        'architecture'  => 'architecture',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['image_name'] = $this->imageName;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->osVersion) {
            $res['os_version'] = $this->osVersion;
        }
        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }
        if (null !== $this->osType) {
            $res['os_type'] = $this->osType;
        }
        if (null !== $this->imageCategory) {
            $res['image_category'] = $this->imageCategory;
        }
        if (null !== $this->architecture) {
            $res['architecture'] = $this->architecture;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['image_name'])) {
            $model->imageName = $map['image_name'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['os_version'])) {
            $model->osVersion = $map['os_version'];
        }
        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }
        if (isset($map['os_type'])) {
            $model->osType = $map['os_type'];
        }
        if (isset($map['image_category'])) {
            $model->imageCategory = $map['image_category'];
        }
        if (isset($map['architecture'])) {
            $model->architecture = $map['architecture'];
        }

        return $model;
    }
}
