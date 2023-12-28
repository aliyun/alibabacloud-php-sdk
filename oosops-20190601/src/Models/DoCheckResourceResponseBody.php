<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DoCheckResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

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
        'requestId'      => 'RequestId',
        'bid'            => 'bid',
        'country'        => 'country',
        'gmtWakeup'      => 'gmtWakeup',
        'hid'            => 'hid',
        'interrupt'      => 'interrupt',
        'invoker'        => 'invoker',
        'level'          => 'level',
        'message'        => 'message',
        'pk'             => 'pk',
        'prompt'         => 'prompt',
        'success'        => 'success',
        'taskExtraData'  => 'taskExtraData',
        'taskIdentifier' => 'taskIdentifier',
        'url'            => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bid) {
            $res['bid'] = $this->bid;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->gmtWakeup) {
            $res['gmtWakeup'] = $this->gmtWakeup;
        }
        if (null !== $this->hid) {
            $res['hid'] = $this->hid;
        }
        if (null !== $this->interrupt) {
            $res['interrupt'] = $this->interrupt;
        }
        if (null !== $this->invoker) {
            $res['invoker'] = $this->invoker;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
        }
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->taskExtraData) {
            $res['taskExtraData'] = $this->taskExtraData;
        }
        if (null !== $this->taskIdentifier) {
            $res['taskIdentifier'] = $this->taskIdentifier;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoCheckResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['bid'])) {
            $model->bid = $map['bid'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['gmtWakeup'])) {
            $model->gmtWakeup = $map['gmtWakeup'];
        }
        if (isset($map['hid'])) {
            $model->hid = $map['hid'];
        }
        if (isset($map['interrupt'])) {
            $model->interrupt = $map['interrupt'];
        }
        if (isset($map['invoker'])) {
            $model->invoker = $map['invoker'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['pk'])) {
            $model->pk = $map['pk'];
        }
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['taskExtraData'])) {
            $model->taskExtraData = $map['taskExtraData'];
        }
        if (isset($map['taskIdentifier'])) {
            $model->taskIdentifier = $map['taskIdentifier'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
