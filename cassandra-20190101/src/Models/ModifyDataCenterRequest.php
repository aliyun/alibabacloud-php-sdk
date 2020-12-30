<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataCenterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $dataCenterName;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'dataCenterId'   => 'DataCenterId',
        'dataCenterName' => 'DataCenterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->dataCenterName) {
            $res['DataCenterName'] = $this->dataCenterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataCenterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['DataCenterName'])) {
            $model->dataCenterName = $map['DataCenterName'];
        }

        return $model;
    }
}
