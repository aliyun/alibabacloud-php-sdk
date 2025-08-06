<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;

class DescribeAnycastPopLocationsRequest extends Model
{
    /**
     * @var string
     */
    public $serviceLocation;
    protected $_name = [
        'serviceLocation' => 'ServiceLocation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
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
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }

        return $model;
    }
}
