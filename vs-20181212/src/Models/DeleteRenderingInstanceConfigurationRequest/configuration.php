<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceConfigurationRequest;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @var string[]
     */
    public $attributeNames;

    /**
     * @description This parameter is required.
     *
     * @example location
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'attributeNames' => 'AttributeNames',
        'moduleName'     => 'ModuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeNames) {
            $res['AttributeNames'] = $this->attributeNames;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeNames'])) {
            if (!empty($map['AttributeNames'])) {
                $model->attributeNames = $map['AttributeNames'];
            }
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
