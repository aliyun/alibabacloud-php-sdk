<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceBindNumberRequest extends Model
{
    /**
     * @example 1,2,4,5
     *
     * @var string
     */
    public $instanceList;

    /**
     * @example 10088
     *
     * @var string
     */
    public $number;
    protected $_name = [
        'instanceList' => 'InstanceList',
        'number'       => 'Number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceBindNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
