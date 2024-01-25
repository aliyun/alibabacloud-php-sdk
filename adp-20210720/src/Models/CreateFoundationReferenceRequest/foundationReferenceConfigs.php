<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateFoundationReferenceRequest;

use AlibabaCloud\Tea\Model;

class foundationReferenceConfigs extends Model
{
    /**
     * @var string
     */
    public $componentReleaseName;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'componentReleaseName' => 'componentReleaseName',
        'configType'           => 'configType',
        'name'                 => 'name',
        'value'                => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentReleaseName) {
            $res['componentReleaseName'] = $this->componentReleaseName;
        }
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return foundationReferenceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentReleaseName'])) {
            $model->componentReleaseName = $map['componentReleaseName'];
        }
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
