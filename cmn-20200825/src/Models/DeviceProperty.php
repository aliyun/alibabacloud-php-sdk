<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeviceProperty extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $deviceForm;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $nameCn;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $propertyId;
    protected $_name = [
        'content'    => 'Content',
        'deviceForm' => 'DeviceForm',
        'format'     => 'Format',
        'nameCn'     => 'NameCn',
        'nameEn'     => 'NameEn',
        'propertyId' => 'PropertyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->nameCn) {
            $res['NameCn'] = $this->nameCn;
        }
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['NameCn'])) {
            $model->nameCn = $map['NameCn'];
        }
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        return $model;
    }
}
