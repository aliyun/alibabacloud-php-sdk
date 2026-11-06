<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RerunWorkflowNodeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $affectedNodeKeys;

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
    public $planId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var int
     */
    public $stateVersion;
    protected $_name = [
        'affectedNodeKeys' => 'affectedNodeKeys',
        'code' => 'code',
        'message' => 'message',
        'planId' => 'planId',
        'requestId' => 'requestId',
        'revision' => 'revision',
        'runId' => 'runId',
        'stateVersion' => 'stateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->affectedNodeKeys)) {
            Model::validateArray($this->affectedNodeKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedNodeKeys) {
            if (\is_array($this->affectedNodeKeys)) {
                $res['affectedNodeKeys'] = [];
                $n1 = 0;
                foreach ($this->affectedNodeKeys as $item1) {
                    $res['affectedNodeKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->stateVersion) {
            $res['stateVersion'] = $this->stateVersion;
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
        if (isset($map['affectedNodeKeys'])) {
            if (!empty($map['affectedNodeKeys'])) {
                $model->affectedNodeKeys = [];
                $n1 = 0;
                foreach ($map['affectedNodeKeys'] as $item1) {
                    $model->affectedNodeKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['stateVersion'])) {
            $model->stateVersion = $map['stateVersion'];
        }

        return $model;
    }
}
