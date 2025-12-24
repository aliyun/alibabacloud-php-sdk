<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponseBody\checkTaskInfos;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponseBody\prerequisites;

class VerifyPlaybookResponseBody extends Model
{
    /**
     * @var checkTaskInfos[]
     */
    public $checkTaskInfos;

    /**
     * @var prerequisites[]
     */
    public $prerequisites;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkTaskInfos' => 'CheckTaskInfos',
        'prerequisites' => 'Prerequisites',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkTaskInfos)) {
            Model::validateArray($this->checkTaskInfos);
        }
        if (\is_array($this->prerequisites)) {
            Model::validateArray($this->prerequisites);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTaskInfos) {
            if (\is_array($this->checkTaskInfos)) {
                $res['CheckTaskInfos'] = [];
                $n1 = 0;
                foreach ($this->checkTaskInfos as $item1) {
                    $res['CheckTaskInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prerequisites) {
            if (\is_array($this->prerequisites)) {
                $res['Prerequisites'] = [];
                $n1 = 0;
                foreach ($this->prerequisites as $item1) {
                    $res['Prerequisites'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CheckTaskInfos'])) {
            if (!empty($map['CheckTaskInfos'])) {
                $model->checkTaskInfos = [];
                $n1 = 0;
                foreach ($map['CheckTaskInfos'] as $item1) {
                    $model->checkTaskInfos[$n1] = checkTaskInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Prerequisites'])) {
            if (!empty($map['Prerequisites'])) {
                $model->prerequisites = [];
                $n1 = 0;
                foreach ($map['Prerequisites'] as $item1) {
                    $model->prerequisites[$n1] = prerequisites::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
