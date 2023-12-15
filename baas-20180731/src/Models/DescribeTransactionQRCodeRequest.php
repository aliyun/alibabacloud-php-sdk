<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeTransactionQRCodeRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $hash;
    protected $_name = [
        'bizid' => 'Bizid',
        'hash'  => 'Hash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransactionQRCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }

        return $model;
    }
}
