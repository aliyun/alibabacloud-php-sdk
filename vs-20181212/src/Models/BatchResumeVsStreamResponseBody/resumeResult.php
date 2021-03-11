<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponseBody\resumeResult\resumeResultInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resumeResultInfo) {
            $res['ResumeResultInfo'] = [];
            if (null !== $this->resumeResultInfo && \is_array($this->resumeResultInfo)) {
                $n = 0;
                foreach ($this->resumeResultInfo as $item) {
                    $res['ResumeResultInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resumeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResumeResultInfo'])) {
            if (!empty($map['ResumeResultInfo'])) {
                $model->resumeResultInfo = [];
                $n                       = 0;
                foreach ($map['ResumeResultInfo'] as $item) {
                    $model->resumeResultInfo[$n++] = null !== $item ? resumeResultInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
