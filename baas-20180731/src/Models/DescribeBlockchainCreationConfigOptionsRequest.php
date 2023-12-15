<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeBlockchainCreationConfigOptionsRequest extends Model
{
    /**
     * @var string
     */
    public $purpose;
    protected $_name = [
        'purpose' => 'Purpose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->purpose) {
            $res['Purpose'] = $this->purpose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBlockchainCreationConfigOptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Purpose'])) {
            $model->purpose = $map['Purpose'];
        }

        return $model;
    }
}
