<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class portCollection extends Model
{
    /**
     * @example 端口集名称
     *
     * @var string
     */
    public $portCollectionName;
    protected $_name = [
        'portCollectionName' => 'PortCollectionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portCollectionName) {
            $res['PortCollectionName'] = $this->portCollectionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portCollection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortCollectionName'])) {
            $model->portCollectionName = $map['PortCollectionName'];
        }

        return $model;
    }
}
