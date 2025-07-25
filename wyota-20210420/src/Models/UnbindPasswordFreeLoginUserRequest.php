<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class UnbindPasswordFreeLoginUserRequest extends Model
{
    /**
     * @var string
     */
    public $mainBizType;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'mainBizType' => 'MainBizType',
        'serialNumber' => 'SerialNumber',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindPasswordFreeLoginUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
