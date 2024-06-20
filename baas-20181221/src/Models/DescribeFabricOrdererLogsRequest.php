<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricOrdererLogsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example consortium-test-iyuso3g773ki
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 50
     *
     * @var string
     */
    public $lines;

    /**
     * @description This parameter is required.
     *
     * @example orderer1
     *
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
     * @return DescribeFabricOrdererLogsRequest
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
