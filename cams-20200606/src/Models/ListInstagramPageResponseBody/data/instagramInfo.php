<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class instagramInfo extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $httpFlag;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var string
     */
    public $pageName;

    /**
     * @var string
     */
    public $queueFlag;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $statusCallbackUrl;

    /**
     * @var string
     */
    public $statusQueue;

    /**
     * @var string
     */
    public $upCallbackUrl;

    /**
     * @var string
     */
    public $upQueue;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'connectionStatus' => 'ConnectionStatus',
        'httpFlag' => 'HttpFlag',
        'pageId' => 'PageId',
        'pageName' => 'PageName',
        'queueFlag' => 'QueueFlag',
        'queueName' => 'QueueName',
        'statusCallbackUrl' => 'StatusCallbackUrl',
        'statusQueue' => 'StatusQueue',
        'upCallbackUrl' => 'UpCallbackUrl',
        'upQueue' => 'UpQueue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->httpFlag) {
            $res['HttpFlag'] = $this->httpFlag;
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }

        if (null !== $this->pageName) {
            $res['PageName'] = $this->pageName;
        }

        if (null !== $this->queueFlag) {
            $res['QueueFlag'] = $this->queueFlag;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->statusCallbackUrl) {
            $res['StatusCallbackUrl'] = $this->statusCallbackUrl;
        }

        if (null !== $this->statusQueue) {
            $res['StatusQueue'] = $this->statusQueue;
        }

        if (null !== $this->upCallbackUrl) {
            $res['UpCallbackUrl'] = $this->upCallbackUrl;
        }

        if (null !== $this->upQueue) {
            $res['UpQueue'] = $this->upQueue;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['HttpFlag'])) {
            $model->httpFlag = $map['HttpFlag'];
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }

        if (isset($map['PageName'])) {
            $model->pageName = $map['PageName'];
        }

        if (isset($map['QueueFlag'])) {
            $model->queueFlag = $map['QueueFlag'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['StatusCallbackUrl'])) {
            $model->statusCallbackUrl = $map['StatusCallbackUrl'];
        }

        if (isset($map['StatusQueue'])) {
            $model->statusQueue = $map['StatusQueue'];
        }

        if (isset($map['UpCallbackUrl'])) {
            $model->upCallbackUrl = $map['UpCallbackUrl'];
        }

        if (isset($map['UpQueue'])) {
            $model->upQueue = $map['UpQueue'];
        }

        return $model;
    }
}
