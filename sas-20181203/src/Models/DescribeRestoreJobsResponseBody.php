<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponseBody\restoreJobs;
use AlibabaCloud\Tea\Model;

class DescribeRestoreJobsResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0ED92280-4363-57D3-A4D3-4D3FBC99B29F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the restoration tasks.
     *
     * @var restoreJobs[]
     */
    public $restoreJobs;
    protected $_name = [
        'pageInfo'    => 'PageInfo',
        'requestId'   => 'RequestId',
        'restoreJobs' => 'RestoreJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreJobs) {
            $res['RestoreJobs'] = [];
            if (null !== $this->restoreJobs && \is_array($this->restoreJobs)) {
                $n = 0;
                foreach ($this->restoreJobs as $item) {
                    $res['RestoreJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreJobs'])) {
            if (!empty($map['RestoreJobs'])) {
                $model->restoreJobs = [];
                $n                  = 0;
                foreach ($map['RestoreJobs'] as $item) {
                    $model->restoreJobs[$n++] = null !== $item ? restoreJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
