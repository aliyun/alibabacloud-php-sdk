<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyStatisticsResponseBody\resultObject\items;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $initDevice;

    /**
     * @var int
     */
    public $initDeviceId;

    /**
     * @var int
     */
    public $initDeviceIdSuccess;

    /**
     * @var int
     */
    public $initDeviceSuccess;

    /**
     * @var int
     */
    public $initService;

    /**
     * @var int
     */
    public $initServiceId;

    /**
     * @var int
     */
    public $initServiceIdSuccess;

    /**
     * @var int
     */
    public $initServiceSuccess;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $verifyDevice;

    /**
     * @var int
     */
    public $verifyDeviceId;

    /**
     * @var int
     */
    public $verifyDeviceIdSuccess;

    /**
     * @var int
     */
    public $verifyDeviceIdSuccessPassed;

    /**
     * @var int
     */
    public $verifyDeviceSuccess;

    /**
     * @var int
     */
    public $verifyDeviceSuccessPassed;
    protected $_name = [
        'initDevice' => 'InitDevice',
        'initDeviceId' => 'InitDeviceId',
        'initDeviceIdSuccess' => 'InitDeviceIdSuccess',
        'initDeviceSuccess' => 'InitDeviceSuccess',
        'initService' => 'InitService',
        'initServiceId' => 'InitServiceId',
        'initServiceIdSuccess' => 'InitServiceIdSuccess',
        'initServiceSuccess' => 'InitServiceSuccess',
        'items' => 'Items',
        'verifyDevice' => 'VerifyDevice',
        'verifyDeviceId' => 'VerifyDeviceId',
        'verifyDeviceIdSuccess' => 'VerifyDeviceIdSuccess',
        'verifyDeviceIdSuccessPassed' => 'VerifyDeviceIdSuccessPassed',
        'verifyDeviceSuccess' => 'VerifyDeviceSuccess',
        'verifyDeviceSuccessPassed' => 'VerifyDeviceSuccessPassed',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initDevice) {
            $res['InitDevice'] = $this->initDevice;
        }

        if (null !== $this->initDeviceId) {
            $res['InitDeviceId'] = $this->initDeviceId;
        }

        if (null !== $this->initDeviceIdSuccess) {
            $res['InitDeviceIdSuccess'] = $this->initDeviceIdSuccess;
        }

        if (null !== $this->initDeviceSuccess) {
            $res['InitDeviceSuccess'] = $this->initDeviceSuccess;
        }

        if (null !== $this->initService) {
            $res['InitService'] = $this->initService;
        }

        if (null !== $this->initServiceId) {
            $res['InitServiceId'] = $this->initServiceId;
        }

        if (null !== $this->initServiceIdSuccess) {
            $res['InitServiceIdSuccess'] = $this->initServiceIdSuccess;
        }

        if (null !== $this->initServiceSuccess) {
            $res['InitServiceSuccess'] = $this->initServiceSuccess;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->verifyDevice) {
            $res['VerifyDevice'] = $this->verifyDevice;
        }

        if (null !== $this->verifyDeviceId) {
            $res['VerifyDeviceId'] = $this->verifyDeviceId;
        }

        if (null !== $this->verifyDeviceIdSuccess) {
            $res['VerifyDeviceIdSuccess'] = $this->verifyDeviceIdSuccess;
        }

        if (null !== $this->verifyDeviceIdSuccessPassed) {
            $res['VerifyDeviceIdSuccessPassed'] = $this->verifyDeviceIdSuccessPassed;
        }

        if (null !== $this->verifyDeviceSuccess) {
            $res['VerifyDeviceSuccess'] = $this->verifyDeviceSuccess;
        }

        if (null !== $this->verifyDeviceSuccessPassed) {
            $res['VerifyDeviceSuccessPassed'] = $this->verifyDeviceSuccessPassed;
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
        if (isset($map['InitDevice'])) {
            $model->initDevice = $map['InitDevice'];
        }

        if (isset($map['InitDeviceId'])) {
            $model->initDeviceId = $map['InitDeviceId'];
        }

        if (isset($map['InitDeviceIdSuccess'])) {
            $model->initDeviceIdSuccess = $map['InitDeviceIdSuccess'];
        }

        if (isset($map['InitDeviceSuccess'])) {
            $model->initDeviceSuccess = $map['InitDeviceSuccess'];
        }

        if (isset($map['InitService'])) {
            $model->initService = $map['InitService'];
        }

        if (isset($map['InitServiceId'])) {
            $model->initServiceId = $map['InitServiceId'];
        }

        if (isset($map['InitServiceIdSuccess'])) {
            $model->initServiceIdSuccess = $map['InitServiceIdSuccess'];
        }

        if (isset($map['InitServiceSuccess'])) {
            $model->initServiceSuccess = $map['InitServiceSuccess'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VerifyDevice'])) {
            $model->verifyDevice = $map['VerifyDevice'];
        }

        if (isset($map['VerifyDeviceId'])) {
            $model->verifyDeviceId = $map['VerifyDeviceId'];
        }

        if (isset($map['VerifyDeviceIdSuccess'])) {
            $model->verifyDeviceIdSuccess = $map['VerifyDeviceIdSuccess'];
        }

        if (isset($map['VerifyDeviceIdSuccessPassed'])) {
            $model->verifyDeviceIdSuccessPassed = $map['VerifyDeviceIdSuccessPassed'];
        }

        if (isset($map['VerifyDeviceSuccess'])) {
            $model->verifyDeviceSuccess = $map['VerifyDeviceSuccess'];
        }

        if (isset($map['VerifyDeviceSuccessPassed'])) {
            $model->verifyDeviceSuccessPassed = $map['VerifyDeviceSuccessPassed'];
        }

        return $model;
    }
}
