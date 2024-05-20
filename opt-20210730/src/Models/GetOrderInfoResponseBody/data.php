<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Opt\V20210730\Models\GetOrderInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $currentConcurrency;

    /**
     * @var int
     */
    public $currentDays;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $licenseKey;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $totalDays;
    protected $_name = [
        'bizType'            => 'bizType',
        'currentConcurrency' => 'currentConcurrency',
        'currentDays'        => 'currentDays',
        'instanceId'         => 'instanceId',
        'licenseKey'         => 'licenseKey',
        'remark'             => 'remark',
        'totalDays'          => 'totalDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }
        if (null !== $this->currentConcurrency) {
            $res['currentConcurrency'] = $this->currentConcurrency;
        }
        if (null !== $this->currentDays) {
            $res['currentDays'] = $this->currentDays;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->licenseKey) {
            $res['licenseKey'] = $this->licenseKey;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->totalDays) {
            $res['totalDays'] = $this->totalDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }
        if (isset($map['currentConcurrency'])) {
            $model->currentConcurrency = $map['currentConcurrency'];
        }
        if (isset($map['currentDays'])) {
            $model->currentDays = $map['currentDays'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['licenseKey'])) {
            $model->licenseKey = $map['licenseKey'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['totalDays'])) {
            $model->totalDays = $map['totalDays'];
        }

        return $model;
    }
}
