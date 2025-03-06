<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob;

use AlibabaCloud\Tea\Model;

class otsDetail extends Model
{
    /**
     * @description The number of channels processed by each Tablestore restore job.
     *
     * @example 2
     *
     * @var int
     */
    public $batchChannelCount;

    /**
     * @description Indicates whether the existing Tablestore restore job was overwritten.
     *
     * @example false
     *
     * @var bool
     */
    public $overwriteExisting;
    protected $_name = [
        'batchChannelCount' => 'BatchChannelCount',
        'overwriteExisting' => 'OverwriteExisting',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return otsDetail
     */
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
