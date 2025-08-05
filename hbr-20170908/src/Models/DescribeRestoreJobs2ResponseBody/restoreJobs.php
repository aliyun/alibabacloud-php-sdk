<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob;

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
        if (\is_array($this->restoreJob)) {
            Model::validateArray($this->restoreJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restoreJob) {
            if (\is_array($this->restoreJob)) {
                $res['RestoreJob'] = [];
                $n1 = 0;
                foreach ($this->restoreJob as $item1) {
                    $res['RestoreJob'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RestoreJob'])) {
            if (!empty($map['RestoreJob'])) {
                $model->restoreJob = [];
                $n1 = 0;
                foreach ($map['RestoreJob'] as $item1) {
                    $model->restoreJob[$n1] = restoreJob::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
