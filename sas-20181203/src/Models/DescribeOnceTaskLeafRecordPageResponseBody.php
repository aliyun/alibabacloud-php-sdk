<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponseBody\onceTasks;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeOnceTaskLeafRecordPageResponseBody extends Model
{
    /**
     * @description The sub-tasks returned.
     *
     * @var onceTasks[]
     */
    public $onceTasks;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB393****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'onceTasks' => 'OnceTasks',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onceTasks) {
            $res['OnceTasks'] = [];
            if (null !== $this->onceTasks && \is_array($this->onceTasks)) {
                $n = 0;
                foreach ($this->onceTasks as $item) {
                    $res['OnceTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOnceTaskLeafRecordPageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnceTasks'])) {
            if (!empty($map['OnceTasks'])) {
                $model->onceTasks = [];
                $n                = 0;
                foreach ($map['OnceTasks'] as $item) {
                    $model->onceTasks[$n++] = null !== $item ? onceTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
