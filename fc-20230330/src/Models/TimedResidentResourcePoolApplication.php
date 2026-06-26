<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class TimedResidentResourcePoolApplication extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timedPoolId;
    protected $_name = [
        'accountId' => 'accountId',
        'content' => 'content',
        'createdTime' => 'createdTime',
        'lastModifiedTime' => 'lastModifiedTime',
        'operationType' => 'operationType',
        'status' => 'status',
        'timedPoolId' => 'timedPoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->timedPoolId) {
            $res['timedPoolId'] = $this->timedPoolId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['timedPoolId'])) {
            $model->timedPoolId = $map['timedPoolId'];
        }

        return $model;
    }
}
