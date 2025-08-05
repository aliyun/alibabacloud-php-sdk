<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob;

use AlibabaCloud\Dara\Model;

class otsDetail extends Model
{
    /**
     * @var int
     */
    public $batchChannelCount;

    /**
     * @var bool
     */
    public $overwriteExisting;
    protected $_name = [
        'batchChannelCount' => 'BatchChannelCount',
        'overwriteExisting' => 'OverwriteExisting',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchChannelCount) {
            $res['BatchChannelCount'] = $this->batchChannelCount;
        }

        if (null !== $this->overwriteExisting) {
            $res['OverwriteExisting'] = $this->overwriteExisting;
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
        if (isset($map['BatchChannelCount'])) {
            $model->batchChannelCount = $map['BatchChannelCount'];
        }

        if (isset($map['OverwriteExisting'])) {
            $model->overwriteExisting = $map['OverwriteExisting'];
        }

        return $model;
    }
}
