<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class invalidSnList extends Model
{
    /**
     * @description invalidSn
     *
     * @var string[]
     */
    public $invalidSn;
    protected $_name = [
        'invalidSn' => 'invalidSn',
    ];

    public function validate()
    {
        Model::validateRequired('invalidSn', $this->invalidSn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidSn) {
            $res['invalidSn'] = $this->invalidSn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidSnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invalidSn'])) {
            if (!empty($map['invalidSn'])) {
                $model->invalidSn = $map['invalidSn'];
            }
        }

        return $model;
    }
}
