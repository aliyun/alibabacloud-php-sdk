<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RecommendNextActionsRequest extends Model
{
    /**
     * @var string
     */
    public $customPrompt;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var int
     */
    public $recentMessageCount;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'customPrompt' => 'customPrompt',
        'outputType' => 'outputType',
        'recentMessageCount' => 'recentMessageCount',
        'sessionId' => 'sessionId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }

        if (null !== $this->outputType) {
            $res['outputType'] = $this->outputType;
        }

        if (null !== $this->recentMessageCount) {
            $res['recentMessageCount'] = $this->recentMessageCount;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }

        if (isset($map['outputType'])) {
            $model->outputType = $map['outputType'];
        }

        if (isset($map['recentMessageCount'])) {
            $model->recentMessageCount = $map['recentMessageCount'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
