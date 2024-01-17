<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\Tea\Model;

class wanxiangImageStyleConfig extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example https://img.alicdn.com/imgextra/i4/O1CN01RzKicz1W0YWzYkWcK_!!6000000002726-2-tps-132-104.png
     *
     * @var string
     */
    public $pic;

    /**
     * @example <auto>
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'pic'   => 'Pic',
        'value' => 'Value',
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
        if (null !== $this->pic) {
            $res['Pic'] = $this->pic;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wanxiangImageStyleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pic'])) {
            $model->pic = $map['Pic'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
