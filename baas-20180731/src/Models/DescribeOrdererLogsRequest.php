<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeOrdererLogsRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $lines;

    /**
     * @var string
     */
    public $ordererName;
    protected $_name = [
        'consortiumId' => 'ConsortiumId',
        'lines'        => 'Lines',
        'ordererName'  => 'OrdererName',
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
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->ordererName) {
            $res['OrdererName'] = $this->ordererName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrdererLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['OrdererName'])) {
            $model->ordererName = $map['OrdererName'];
        }

        return $model;
    }
}
