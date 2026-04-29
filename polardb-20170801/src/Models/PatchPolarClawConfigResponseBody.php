<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class PatchPolarClawConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $ok;

    /**
     * @var string[]
     */
    public $patchedKeys;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $restarted;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'message' => 'Message',
        'ok' => 'Ok',
        'patchedKeys' => 'PatchedKeys',
        'requestId' => 'RequestId',
        'restarted' => 'Restarted',
    ];

    public function validate()
    {
        if (\is_array($this->patchedKeys)) {
            Model::validateArray($this->patchedKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ok) {
            $res['Ok'] = $this->ok;
        }

        if (null !== $this->patchedKeys) {
            if (\is_array($this->patchedKeys)) {
                $res['PatchedKeys'] = [];
                $n1 = 0;
                foreach ($this->patchedKeys as $item1) {
                    $res['PatchedKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restarted) {
            $res['Restarted'] = $this->restarted;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Ok'])) {
            $model->ok = $map['Ok'];
        }

        if (isset($map['PatchedKeys'])) {
            if (!empty($map['PatchedKeys'])) {
                $model->patchedKeys = [];
                $n1 = 0;
                foreach ($map['PatchedKeys'] as $item1) {
                    $model->patchedKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Restarted'])) {
            $model->restarted = $map['Restarted'];
        }

        return $model;
    }
}
