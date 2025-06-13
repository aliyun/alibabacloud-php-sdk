<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsResponseBody\AScriptIds;

class CreateAScriptsResponseBody extends Model
{
    /**
     * @var AScriptIds[]
     */
    public $AScriptIds;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AScriptIds' => 'AScriptIds',
        'jobId' => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AScriptIds)) {
            Model::validateArray($this->AScriptIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AScriptIds) {
            if (\is_array($this->AScriptIds)) {
                $res['AScriptIds'] = [];
                $n1 = 0;
                foreach ($this->AScriptIds as $item1) {
                    $res['AScriptIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AScriptIds'])) {
            if (!empty($map['AScriptIds'])) {
                $model->AScriptIds = [];
                $n1 = 0;
                foreach ($map['AScriptIds'] as $item1) {
                    $model->AScriptIds[$n1] = AScriptIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
