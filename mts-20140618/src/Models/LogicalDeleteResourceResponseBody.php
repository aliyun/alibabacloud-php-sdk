<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class LogicalDeleteResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $gmtWakeup;

    /**
     * @var int
     */
    public $hid;

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
    public $taskIdentifier;

    /**
     * @var string
     */
    public $taskExtraData;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bool
     */
    public $interrupt;
    protected $_name = [
        'gmtWakeup'      => 'GmtWakeup',
        'hid'            => 'Hid',
        'invoker'        => 'Invoker',
        'message'        => 'Message',
        'taskIdentifier' => 'TaskIdentifier',
        'taskExtraData'  => 'TaskExtraData',
        'country'        => 'Country',
        'pk'             => 'Pk',
        'bid'            => 'Bid',
        'success'        => 'Success',
        'interrupt'      => 'Interrupt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtWakeup) {
            $res['GmtWakeup'] = $this->gmtWakeup;
        }
        if (null !== $this->hid) {
            $res['Hid'] = $this->hid;
        }
        if (null !== $this->invoker) {
            $res['Invoker'] = $this->invoker;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->taskIdentifier) {
            $res['TaskIdentifier'] = $this->taskIdentifier;
        }
        if (null !== $this->taskExtraData) {
            $res['TaskExtraData'] = $this->taskExtraData;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->interrupt) {
            $res['Interrupt'] = $this->interrupt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogicalDeleteResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtWakeup'])) {
            $model->gmtWakeup = $map['GmtWakeup'];
        }
        if (isset($map['Hid'])) {
            $model->hid = $map['Hid'];
        }
        if (isset($map['Invoker'])) {
            $model->invoker = $map['Invoker'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TaskIdentifier'])) {
            $model->taskIdentifier = $map['TaskIdentifier'];
        }
        if (isset($map['TaskExtraData'])) {
            $model->taskExtraData = $map['TaskExtraData'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Interrupt'])) {
            $model->interrupt = $map['Interrupt'];
        }

        return $model;
    }
}
