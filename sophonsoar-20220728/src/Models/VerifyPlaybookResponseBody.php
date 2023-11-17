<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponseBody\checkTaskInfos;
use AlibabaCloud\Tea\Model;

class VerifyPlaybookResponseBody extends Model
{
    /**
     * @var checkTaskInfos[]
     */
    public $checkTaskInfos;

    /**
     * @example 0DFC9403-54EB-5672-B690-9AA93C9EBB54
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkTaskInfos' => 'CheckTaskInfos',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkTaskInfos) {
            $res['CheckTaskInfos'] = [];
            if (null !== $this->checkTaskInfos && \is_array($this->checkTaskInfos)) {
                $n = 0;
                foreach ($this->checkTaskInfos as $item) {
                    $res['CheckTaskInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyPlaybookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckTaskInfos'])) {
            if (!empty($map['CheckTaskInfos'])) {
                $model->checkTaskInfos = [];
                $n                     = 0;
                foreach ($map['CheckTaskInfos'] as $item) {
                    $model->checkTaskInfos[$n++] = null !== $item ? checkTaskInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
