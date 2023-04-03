<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponseBody;

use AlibabaCloud\Tea\Model;

class customLines extends Model
{
    /**
     * @description The code of the custom line.
     *
     * @example hra0yc-597
     *
     * @var string
     */
    public $code;

    /**
     * @description The unique ID of the custom line.
     *
     * @example 597
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the custom line.
     *
     * @example hra0yd-597
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'code' => 'Code',
        'id'   => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
