<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult\resumeResultInfo;

class resumeResult extends Model
{
    /**
     * @var resumeResultInfo[]
     */
    public $resumeResultInfo;
    protected $_name = [
        'resumeResultInfo' => 'ResumeResultInfo',
    ];

    public function validate()
    {
        if (\is_array($this->resumeResultInfo)) {
            Model::validateArray($this->resumeResultInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resumeResultInfo) {
            if (\is_array($this->resumeResultInfo)) {
                $res['ResumeResultInfo'] = [];
                $n1 = 0;
                foreach ($this->resumeResultInfo as $item1) {
                    $res['ResumeResultInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResumeResultInfo'])) {
            if (!empty($map['ResumeResultInfo'])) {
                $model->resumeResultInfo = [];
                $n1 = 0;
                foreach ($map['ResumeResultInfo'] as $item1) {
                    $model->resumeResultInfo[$n1] = resumeResultInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
