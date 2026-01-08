<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class GetChatFlowMetricRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var mixed[]
     */
    public $bizExtend;

    /**
     * @var string
     */
    public $flowCode;

    /**
     * @var string
     */
    public $flowVersion;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var mixed[]
     */
    public $metricParam;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'flowCode' => 'FlowCode',
        'flowVersion' => 'FlowVersion',
        'from' => 'From',
        'metricName' => 'MetricName',
        'metricParam' => 'MetricParam',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'to' => 'To',
    ];

    public function validate()
    {
        if (\is_array($this->bizExtend)) {
            Model::validateArray($this->bizExtend);
        }
        if (\is_array($this->metricParam)) {
            Model::validateArray($this->metricParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtend) {
            if (\is_array($this->bizExtend)) {
                $res['BizExtend'] = [];
                foreach ($this->bizExtend as $key1 => $value1) {
                    $res['BizExtend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }

        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->metricParam) {
            if (\is_array($this->metricParam)) {
                $res['MetricParam'] = [];
                foreach ($this->metricParam as $key1 => $value1) {
                    $res['MetricParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            if (!empty($map['BizExtend'])) {
                $model->bizExtend = [];
                foreach ($map['BizExtend'] as $key1 => $value1) {
                    $model->bizExtend[$key1] = $value1;
                }
            }
        }

        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }

        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['MetricParam'])) {
            if (!empty($map['MetricParam'])) {
                $model->metricParam = [];
                foreach ($map['MetricParam'] as $key1 => $value1) {
                    $model->metricParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
