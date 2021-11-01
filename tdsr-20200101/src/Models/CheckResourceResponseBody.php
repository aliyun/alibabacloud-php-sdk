<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CheckResourceResponseBody extends Model
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
     * @var string
     */
    public $gmtWakeup;

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
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $requestId;

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
    public $url;
    protected $_name = [
        'bid'            => 'Bid',
        'country'        => 'Country',
        'gmtWakeup'      => 'GmtWakeup',
        'hid'            => 'Hid',
        'interrupt'      => 'Interrupt',
        'invoker'        => 'Invoker',
        'level'          => 'Level',
        'message'        => 'Message',
        'pk'             => 'Pk',
        'prompt'         => 'Prompt',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'taskExtraData'  => 'TaskExtraData',
        'taskIdentifier' => 'TaskIdentifier',
        'url'            => 'Url',
    ];

    public function validate()
    {
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
        if (null !== $this->gmtWakeup) {
            $res['GmtWakeup'] = $this->gmtWakeup;
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckResourceResponseBody
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
        if (isset($map['GmtWakeup'])) {
            $model->gmtWakeup = $map['GmtWakeup'];
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
