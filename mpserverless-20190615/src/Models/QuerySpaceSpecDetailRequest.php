<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class QuerySpaceSpecDetailRequest extends Model
{
    /**
     * @var string
     */
    public $specCode;
    protected $_name = [
        'specCode' => 'SpecCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpaceSpecDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }

        return $model;
    }
}
