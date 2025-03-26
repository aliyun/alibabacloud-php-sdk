<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExecuteAITeacherChineseCompositionTutoringWorkflowRunHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var int
     */
    public $stsTokenCallerUid;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'callerParentId' => 'callerParentId',
        'callerType' => 'callerType',
        'callerUid' => 'callerUid',
        'stsTokenCallerUid' => 'stsTokenCallerUid',
    ];

    public function validate()
    {
        if (\is_array($this->commonHeaders)) {
            Model::validateArray($this->commonHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            if (\is_array($this->commonHeaders)) {
                $res['commonHeaders'] = [];
                foreach ($this->commonHeaders as $key1 => $value1) {
                    $res['commonHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->callerParentId) {
            $res['callerParentId'] = $this->callerParentId;
        }

        if (null !== $this->callerType) {
            $res['callerType'] = $this->callerType;
        }

        if (null !== $this->callerUid) {
            $res['callerUid'] = $this->callerUid;
        }

        if (null !== $this->stsTokenCallerUid) {
            $res['stsTokenCallerUid'] = $this->stsTokenCallerUid;
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
        if (isset($map['commonHeaders'])) {
            if (!empty($map['commonHeaders'])) {
                $model->commonHeaders = [];
                foreach ($map['commonHeaders'] as $key1 => $value1) {
                    $model->commonHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['callerParentId'])) {
            $model->callerParentId = $map['callerParentId'];
        }

        if (isset($map['callerType'])) {
            $model->callerType = $map['callerType'];
        }

        if (isset($map['callerUid'])) {
            $model->callerUid = $map['callerUid'];
        }

        if (isset($map['stsTokenCallerUid'])) {
            $model->stsTokenCallerUid = $map['stsTokenCallerUid'];
        }

        return $model;
    }
}
