<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\anycastEipBindInfoList;

use AlibabaCloud\Dara\Model;

class popLocations extends Model
{
    /**
     * @var string
     */
    public $popLocation;
    protected $_name = [
        'popLocation' => 'PopLocation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->popLocation) {
            $res['PopLocation'] = $this->popLocation;
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
        if (isset($map['PopLocation'])) {
            $model->popLocation = $map['PopLocation'];
        }

        return $model;
    }
}
