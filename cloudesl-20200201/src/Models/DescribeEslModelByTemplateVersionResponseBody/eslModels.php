<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslModelByTemplateVersionResponseBody;

use AlibabaCloud\Tea\Model;

class eslModels extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $eslPhysicalSize;

    /**
     * @example 800X480
     *
     * @var string
     */
    public $eslSize;

    /**
     * @example /9xwqexcdaxasada....
     *
     * @var string
     */
    public $image;

    /**
     * @example 9946366490094af4ab16bfe023ad5f22
     *
     * @var string
     */
    public $modelId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $screenHeight;

    /**
     * @var int
     */
    public $screenWidth;

    /**
     * @example ali
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceType'      => 'DeviceType',
        'eslPhysicalSize' => 'EslPhysicalSize',
        'eslSize'         => 'EslSize',
        'image'           => 'Image',
        'modelId'         => 'ModelId',
        'name'            => 'Name',
        'screenHeight'    => 'ScreenHeight',
        'screenWidth'     => 'ScreenWidth',
        'vendor'          => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->eslPhysicalSize) {
            $res['EslPhysicalSize'] = $this->eslPhysicalSize;
        }
        if (null !== $this->eslSize) {
            $res['EslSize'] = $this->eslSize;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->screenHeight) {
            $res['ScreenHeight'] = $this->screenHeight;
        }
        if (null !== $this->screenWidth) {
            $res['ScreenWidth'] = $this->screenWidth;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eslModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['EslPhysicalSize'])) {
            $model->eslPhysicalSize = $map['EslPhysicalSize'];
        }
        if (isset($map['EslSize'])) {
            $model->eslSize = $map['EslSize'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScreenHeight'])) {
            $model->screenHeight = $map['ScreenHeight'];
        }
        if (isset($map['ScreenWidth'])) {
            $model->screenWidth = $map['ScreenWidth'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
