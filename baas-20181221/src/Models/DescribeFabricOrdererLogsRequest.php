<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricOrdererLogsRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $ordererName;

    /**
     * @var string
     */
    public $lines;
    protected $_name = [
        'consortiumId' => 'ConsortiumId',
        'ordererName'  => 'OrdererName',
        'lines'        => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->ordererName) {
            $res['OrdererName'] = $this->ordererName;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricOrdererLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['OrdererName'])) {
            $model->ordererName = $map['OrdererName'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }

        return $model;
    }
}
