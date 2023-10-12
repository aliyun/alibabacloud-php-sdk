<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeviceForm extends Model
{
    /**
     * @var string
     */
    public $accountConfig;

    /**
     * @var string
     */
    public $configCompare;

    /**
     * @var string
     */
    public $formId;

    /**
     * @var string
     */
    public $formName;

    /**
     * @var DeviceFormProperty[]
     */
    public $propertiesList;
    protected $_name = [
        'accountConfig'  => 'AccountConfig',
        'configCompare'  => 'ConfigCompare',
        'formId'         => 'FormId',
        'formName'       => 'FormName',
        'propertiesList' => 'PropertiesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountConfig) {
            $res['AccountConfig'] = $this->accountConfig;
        }
        if (null !== $this->configCompare) {
            $res['ConfigCompare'] = $this->configCompare;
        }
        if (null !== $this->formId) {
            $res['FormId'] = $this->formId;
        }
        if (null !== $this->formName) {
            $res['FormName'] = $this->formName;
        }
        if (null !== $this->propertiesList) {
            $res['PropertiesList'] = [];
            if (null !== $this->propertiesList && \is_array($this->propertiesList)) {
                $n = 0;
                foreach ($this->propertiesList as $item) {
                    $res['PropertiesList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceForm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountConfig'])) {
            $model->accountConfig = $map['AccountConfig'];
        }
        if (isset($map['ConfigCompare'])) {
            $model->configCompare = $map['ConfigCompare'];
        }
        if (isset($map['FormId'])) {
            $model->formId = $map['FormId'];
        }
        if (isset($map['FormName'])) {
            $model->formName = $map['FormName'];
        }
        if (isset($map['PropertiesList'])) {
            if (!empty($map['PropertiesList'])) {
                $model->propertiesList = [];
                $n                     = 0;
                foreach ($map['PropertiesList'] as $item) {
                    $model->propertiesList[$n++] = null !== $item ? DeviceFormProperty::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
