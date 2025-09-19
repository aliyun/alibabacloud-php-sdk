<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponseBody\restoreJobs;

class DescribeRestoreJobsResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreJobs[]
     */
    public $restoreJobs;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'restoreJobs' => 'RestoreJobs',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->restoreJobs)) {
            Model::validateArray($this->restoreJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restoreJobs) {
            if (\is_array($this->restoreJobs)) {
                $res['RestoreJobs'] = [];
                $n1 = 0;
                foreach ($this->restoreJobs as $item1) {
                    $res['RestoreJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RestoreJobs'])) {
            if (!empty($map['RestoreJobs'])) {
                $model->restoreJobs = [];
                $n1 = 0;
                foreach ($map['RestoreJobs'] as $item1) {
                    $model->restoreJobs[$n1] = restoreJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
