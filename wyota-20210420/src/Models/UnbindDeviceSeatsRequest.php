<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class UnbindDeviceSeatsRequest extends Model
{
    /**
     * @var string[]
     */
    public $serialNoList;
    protected $_name = [
        'serialNoList' => 'SerialNoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNoList) {
            $res['SerialNoList'] = $this->serialNoList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindDeviceSeatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNoList'])) {
            if (!empty($map['SerialNoList'])) {
                $model->serialNoList = $map['SerialNoList'];
            }
        }

        return $model;
    }
}
