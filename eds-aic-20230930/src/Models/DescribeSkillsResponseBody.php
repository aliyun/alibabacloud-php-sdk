<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSkillsResponseBody\skillInfo;

class DescribeSkillsResponseBody extends Model
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
    public $requestId;

    /**
     * @var skillInfo[]
     */
    public $skillInfo;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'skillInfo' => 'SkillInfo',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->skillInfo)) {
            Model::validateArray($this->skillInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skillInfo) {
            if (\is_array($this->skillInfo)) {
                $res['SkillInfo'] = [];
                $n1 = 0;
                foreach ($this->skillInfo as $item1) {
                    $res['SkillInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SkillInfo'])) {
            if (!empty($map['SkillInfo'])) {
                $model->skillInfo = [];
                $n1 = 0;
                foreach ($map['SkillInfo'] as $item1) {
                    $model->skillInfo[$n1] = skillInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
