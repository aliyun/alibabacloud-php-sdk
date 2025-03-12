<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\Tea\Model;

class specifications extends Model
{
    /**
     * @description The commodity code.
     *
     * @example cmjj00xxxx
     *
     * @var string
     */
    public $code;

    /**
     * @description The specification name.
     *
     * @example specifications1
     *
     * @var string
     */
    public $name;

    /**
     * @description The subscription duration. Unit: week or year.
     *
     * @var string[]
     */
    public $times;
    protected $_name = [
        'code'  => 'Code',
        'name'  => 'Name',
        'times' => 'Times',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = $map['Times'];
            }
        }

        return $model;
    }
}
