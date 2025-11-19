<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderRequest\dynamicProductParams;

use AlibabaCloud\Dara\Model;

class inputActivateConfig extends Model
{
    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'cityName' => 'CityName',
        'desktopName' => 'DesktopName',
        'imageId' => 'ImageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
