<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class DisableOutputItemShareResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $outputItemId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $shareAccessType;

    /**
     * @var bool
     */
    public $shareEnabled;

    /**
     * @var string
     */
    public $shareEnabledAt;

    /**
     * @var string
     */
    public $sharePath;

    /**
     * @var string
     */
    public $shareToken;

    /**
     * @var string
     */
    public $shareUrl;

    /**
     * @var string[]
     */
    public $shareUserGroupIds;

    /**
     * @var int[]
     */
    public $shareUserIds;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'outputItemId' => 'outputItemId',
        'requestId' => 'requestId',
        'shareAccessType' => 'shareAccessType',
        'shareEnabled' => 'shareEnabled',
        'shareEnabledAt' => 'shareEnabledAt',
        'sharePath' => 'sharePath',
        'shareToken' => 'shareToken',
        'shareUrl' => 'shareUrl',
        'shareUserGroupIds' => 'shareUserGroupIds',
        'shareUserIds' => 'shareUserIds',
    ];

    public function validate()
    {
        if (\is_array($this->shareUserGroupIds)) {
            Model::validateArray($this->shareUserGroupIds);
        }
        if (\is_array($this->shareUserIds)) {
            Model::validateArray($this->shareUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->outputItemId) {
            $res['outputItemId'] = $this->outputItemId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->shareAccessType) {
            $res['shareAccessType'] = $this->shareAccessType;
        }

        if (null !== $this->shareEnabled) {
            $res['shareEnabled'] = $this->shareEnabled;
        }

        if (null !== $this->shareEnabledAt) {
            $res['shareEnabledAt'] = $this->shareEnabledAt;
        }

        if (null !== $this->sharePath) {
            $res['sharePath'] = $this->sharePath;
        }

        if (null !== $this->shareToken) {
            $res['shareToken'] = $this->shareToken;
        }

        if (null !== $this->shareUrl) {
            $res['shareUrl'] = $this->shareUrl;
        }

        if (null !== $this->shareUserGroupIds) {
            if (\is_array($this->shareUserGroupIds)) {
                $res['shareUserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->shareUserGroupIds as $item1) {
                    $res['shareUserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shareUserIds) {
            if (\is_array($this->shareUserIds)) {
                $res['shareUserIds'] = [];
                $n1 = 0;
                foreach ($this->shareUserIds as $item1) {
                    $res['shareUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['outputItemId'])) {
            $model->outputItemId = $map['outputItemId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['shareAccessType'])) {
            $model->shareAccessType = $map['shareAccessType'];
        }

        if (isset($map['shareEnabled'])) {
            $model->shareEnabled = $map['shareEnabled'];
        }

        if (isset($map['shareEnabledAt'])) {
            $model->shareEnabledAt = $map['shareEnabledAt'];
        }

        if (isset($map['sharePath'])) {
            $model->sharePath = $map['sharePath'];
        }

        if (isset($map['shareToken'])) {
            $model->shareToken = $map['shareToken'];
        }

        if (isset($map['shareUrl'])) {
            $model->shareUrl = $map['shareUrl'];
        }

        if (isset($map['shareUserGroupIds'])) {
            if (!empty($map['shareUserGroupIds'])) {
                $model->shareUserGroupIds = [];
                $n1 = 0;
                foreach ($map['shareUserGroupIds'] as $item1) {
                    $model->shareUserGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['shareUserIds'])) {
            if (!empty($map['shareUserIds'])) {
                $model->shareUserIds = [];
                $n1 = 0;
                foreach ($map['shareUserIds'] as $item1) {
                    $model->shareUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
