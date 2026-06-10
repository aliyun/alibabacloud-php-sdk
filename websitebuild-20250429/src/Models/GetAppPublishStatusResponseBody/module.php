<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPublishStatusResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $canQuickRevert;

    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var string
     */
    public $deployChannel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorStep;

    /**
     * @var bool
     */
    public $isFinish;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $publishNumber;

    /**
     * @var int
     */
    public $publishOrderId;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var string[]
     */
    public $steps;

    /**
     * @var string
     */
    public $subchannel;
    protected $_name = [
        'canQuickRevert' => 'CanQuickRevert',
        'currentStep' => 'CurrentStep',
        'deployChannel' => 'DeployChannel',
        'description' => 'Description',
        'errorStep' => 'ErrorStep',
        'isFinish' => 'IsFinish',
        'isSuccess' => 'IsSuccess',
        'msg' => 'Msg',
        'orderType' => 'OrderType',
        'percent' => 'Percent',
        'publishNumber' => 'PublishNumber',
        'publishOrderId' => 'PublishOrderId',
        'publishTime' => 'PublishTime',
        'siteId' => 'SiteId',
        'steps' => 'Steps',
        'subchannel' => 'Subchannel',
    ];

    public function validate()
    {
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canQuickRevert) {
            $res['CanQuickRevert'] = $this->canQuickRevert;
        }

        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->deployChannel) {
            $res['DeployChannel'] = $this->deployChannel;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->errorStep) {
            $res['ErrorStep'] = $this->errorStep;
        }

        if (null !== $this->isFinish) {
            $res['IsFinish'] = $this->isFinish;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->publishNumber) {
            $res['PublishNumber'] = $this->publishNumber;
        }

        if (null !== $this->publishOrderId) {
            $res['PublishOrderId'] = $this->publishOrderId;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subchannel) {
            $res['Subchannel'] = $this->subchannel;
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
        if (isset($map['CanQuickRevert'])) {
            $model->canQuickRevert = $map['CanQuickRevert'];
        }

        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['DeployChannel'])) {
            $model->deployChannel = $map['DeployChannel'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ErrorStep'])) {
            $model->errorStep = $map['ErrorStep'];
        }

        if (isset($map['IsFinish'])) {
            $model->isFinish = $map['IsFinish'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['PublishNumber'])) {
            $model->publishNumber = $map['PublishNumber'];
        }

        if (isset($map['PublishOrderId'])) {
            $model->publishOrderId = $map['PublishOrderId'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Subchannel'])) {
            $model->subchannel = $map['Subchannel'];
        }

        return $model;
    }
}
