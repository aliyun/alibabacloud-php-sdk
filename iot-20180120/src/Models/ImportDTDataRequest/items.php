<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ImportDTDataRequest;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example Device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example {"key1":12,"key2":56}
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'params'     => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
