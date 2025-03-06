<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob;
use AlibabaCloud\Tea\Model;

class restoreJobs extends Model
{
    /**
     * @var restoreJob[]
     */
    public $restoreJob;
    protected $_name = [
        'restoreJob' => 'RestoreJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreJob) {
            $res['RestoreJob'] = [];
            if (null !== $this->restoreJob && \is_array($this->restoreJob)) {
                $n = 0;
                foreach ($this->restoreJob as $item) {
                    $res['RestoreJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreJob'])) {
            if (!empty($map['RestoreJob'])) {
                $model->restoreJob = [];
                $n                 = 0;
                foreach ($map['RestoreJob'] as $item) {
                    $model->restoreJob[$n++] = null !== $item ? restoreJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
