<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstanceGatewayResponseBody;

use AlibabaCloud\Dara\Model;

class gatewayConfigurationInfos extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $gatewayInstanceId;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
