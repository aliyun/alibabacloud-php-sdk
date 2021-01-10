<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class PhysicalDeleteResourceResponseBody extends Model
{
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
    public $pk;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $hid;

    /**
     * @var string
     */
    public $country;

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
    public $gmtWakeup;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'interrupt'      => 'Interrupt',
        'invoker'        => 'Invoker',
        'pk'             => 'Pk',
        'bid'            => 'Bid',
        'hid'            => 'Hid',
        'country'        => 'Country',
        'taskIdentifier' => 'TaskIdentifier',
        'taskExtraData'  => 'TaskExtraData',
        'gmtWakeup'      => 'GmtWakeup',
        'success'        => 'Success',
        'message'        => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interrupt) {
            $res['Interrupt'] = $this->interrupt;
        }
        if (null !== $this->invoker) {
            $res['Invoker'] = $this->invoker;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->hid) {
            $res['Hid'] = $this->hid;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->taskIdentifier) {
            $res['TaskIdentifier'] = $this->taskIdentifier;
        }
        if (null !== $this->taskExtraData) {
            $res['TaskExtraData'] = $this->taskExtraData;
        }
        if (null !== $this->gmtWakeup) {
            $res['GmtWakeup'] = $this->gmtWakeup;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PhysicalDeleteResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interrupt'])) {
            $model->interrupt = $map['Interrupt'];
        }
        if (isset($map['Invoker'])) {
            $model->invoker = $map['Invoker'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Hid'])) {
            $model->hid = $map['Hid'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['TaskIdentifier'])) {
            $model->taskIdentifier = $map['TaskIdentifier'];
        }
        if (isset($map['TaskExtraData'])) {
            $model->taskExtraData = $map['TaskExtraData'];
        }
        if (isset($map['GmtWakeup'])) {
            $model->gmtWakeup = $map['GmtWakeup'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
