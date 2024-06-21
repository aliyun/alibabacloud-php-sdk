<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData\instanceInfo;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The name of the configuration item, which is unique.
     *
     * @example prot
     *
     * @var string
     */
    public $name;

    /**
     * @description The display name of the configuration item for internationalization.
     *
     * @example prot
     *
     * @var string
     */
    public $showName;

    /**
     * @description The value of the configuration item specified for the instance.
     *
     * @example 8080
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'     => 'Name',
        'showName' => 'ShowName',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
