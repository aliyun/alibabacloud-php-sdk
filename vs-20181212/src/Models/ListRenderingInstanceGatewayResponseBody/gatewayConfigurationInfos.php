<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstanceGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class gatewayConfigurationInfos extends Model
{
    /**
     * @example 2024-10-15 10:19:13
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example render-xxx
     *
     * @var string
     */
    public $gatewayInstanceId;

    /**
     * @example render-342012a227dc4ddf91f024639e43051a
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @example 2024-11-02 12:08:26
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'gatewayInstanceId' => 'GatewayInstanceId',
        'renderingInstanceId' => 'RenderingInstanceId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->gatewayInstanceId) {
            $res['GatewayInstanceId'] = $this->gatewayInstanceId;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayConfigurationInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['GatewayInstanceId'])) {
            $model->gatewayInstanceId = $map['GatewayInstanceId'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
