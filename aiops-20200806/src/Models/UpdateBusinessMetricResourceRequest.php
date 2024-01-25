<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateBusinessMetricResourceRequest extends Model
{
    /**
     * @var int
     */
    public $businessMetricId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $resourceList;
    protected $_name = [
        'businessMetricId' => 'BusinessMetricId',
        'operaUid'         => 'OperaUid',
        'resourceList'     => 'ResourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessMetricId) {
            $res['BusinessMetricId'] = $this->businessMetricId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = $this->resourceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBusinessMetricResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessMetricId'])) {
            $model->businessMetricId = $map['BusinessMetricId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ResourceList'])) {
            $model->resourceList = $map['ResourceList'];
        }

        return $model;
    }
}
