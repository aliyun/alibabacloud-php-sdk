<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ModifySecureNetworkTypeRequest extends Model
{
    /**
     * @var string
     */
    public $secureNetworkType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'secureNetworkType' => 'SecureNetworkType',
        'serialNo'          => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secureNetworkType) {
            $res['SecureNetworkType'] = $this->secureNetworkType;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecureNetworkTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecureNetworkType'])) {
            $model->secureNetworkType = $map['SecureNetworkType'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
