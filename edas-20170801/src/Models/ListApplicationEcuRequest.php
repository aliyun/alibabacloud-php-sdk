<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationEcuRequest extends Model
{
    /**
     * @description The ID of the application whose ECUs you want to query. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example e809****-43d7-4c6b-8e01-b0d9d1db****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the microservices namespace.
     *
     * @example cn-hangzhou:***wei
     *
     * @var string
     */
    public $logicalRegionId;
    protected $_name = [
        'appId'           => 'AppId',
        'logicalRegionId' => 'LogicalRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationEcuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }

        return $model;
    }
}
