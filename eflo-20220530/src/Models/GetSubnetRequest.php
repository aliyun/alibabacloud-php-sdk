<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetSubnetRequest extends Model
{
    /**
     * @example subnet-2avf0itf
     *
     * @var string
     */
    public $subnetId;
    protected $_name = [
        'subnetId' => 'SubnetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubnetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        return $model;
    }
}
