<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList;

use AlibabaCloud\Tea\Model;

class anycastEipBindInfoList extends Model
{
    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @var string
     */
    public $bindInstanceType;

    /**
     * @var string
     */
    public $bindTime;
    protected $_name = [
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'bindTime'             => 'BindTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anycastEipBindInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }

        return $model;
    }
}
