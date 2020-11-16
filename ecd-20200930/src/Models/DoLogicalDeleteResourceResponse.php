<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DoLogicalDeleteResourceResponse extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $country;

    /**
     * @var int
     */
    public $hid;

    /**
     * @var bool
     */
    public $interrupt;

    /**
     * @var string
     */
    public $invoker;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskExtraData;

    /**
     * @var string
     */
    public $taskIdentifier;

    /**
     * @var string
     */
    public $gmtWakeup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bid'            => 'Bid',
        'country'        => 'Country',
        'hid'            => 'Hid',
        'interrupt'      => 'Interrupt',
        'invoker'        => 'Invoker',
        'message'        => 'Message',
        'pk'             => 'Pk',
        'success'        => 'Success',
        'taskExtraData'  => 'TaskExtraData',
        'taskIdentifier' => 'TaskIdentifier',
        'gmtWakeup'      => 'GmtWakeup',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('bid', $this->bid, true);
        Model::validateRequired('country', $this->country, true);
        Model::validateRequired('hid', $this->hid, true);
        Model::validateRequired('interrupt', $this->interrupt, true);
        Model::validateRequired('invoker', $this->invoker, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('pk', $this->pk, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('taskExtraData', $this->taskExtraData, true);
        Model::validateRequired('taskIdentifier', $this->taskIdentifier, true);
        Model::validateRequired('gmtWakeup', $this->gmtWakeup, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->hid) {
            $res['Hid'] = $this->hid;
        }
        if (null !== $this->interrupt) {
            $res['Interrupt'] = $this->interrupt;
        }
        if (null !== $this->invoker) {
            $res['Invoker'] = $this->invoker;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskExtraData) {
            $res['TaskExtraData'] = $this->taskExtraData;
        }
        if (null !== $this->taskIdentifier) {
            $res['TaskIdentifier'] = $this->taskIdentifier;
        }
        if (null !== $this->gmtWakeup) {
            $res['GmtWakeup'] = $this->gmtWakeup;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoLogicalDeleteResourceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Hid'])) {
            $model->hid = $map['Hid'];
        }
        if (isset($map['Interrupt'])) {
            $model->interrupt = $map['Interrupt'];
        }
        if (isset($map['Invoker'])) {
            $model->invoker = $map['Invoker'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskExtraData'])) {
            $model->taskExtraData = $map['TaskExtraData'];
        }
        if (isset($map['TaskIdentifier'])) {
            $model->taskIdentifier = $map['TaskIdentifier'];
        }
        if (isset($map['GmtWakeup'])) {
            $model->gmtWakeup = $map['GmtWakeup'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
