<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CheckResourceResponse extends Model
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

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $requestId;
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
        'level'          => 'Level',
        'url'            => 'Url',
        'prompt'         => 'Prompt',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('interrupt', $this->interrupt, true);
        Model::validateRequired('invoker', $this->invoker, true);
        Model::validateRequired('pk', $this->pk, true);
        Model::validateRequired('bid', $this->bid, true);
        Model::validateRequired('hid', $this->hid, true);
        Model::validateRequired('country', $this->country, true);
        Model::validateRequired('taskIdentifier', $this->taskIdentifier, true);
        Model::validateRequired('taskExtraData', $this->taskExtraData, true);
        Model::validateRequired('gmtWakeup', $this->gmtWakeup, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('prompt', $this->prompt, true);
        Model::validateRequired('requestId', $this->requestId, true);
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckResourceResponse
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
