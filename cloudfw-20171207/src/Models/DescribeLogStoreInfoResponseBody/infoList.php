<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLogStoreInfoResponseBody;

use AlibabaCloud\Dara\Model;

class infoList extends Model
{
    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $maxSplitShard;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $shard;

    /**
     * @var string
     */
    public $site;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var int
     */
    public $used;
    protected $_name = [
        'logStoreName' => 'LogStoreName',
        'maxSplitShard' => 'MaxSplitShard',
        'projectName' => 'ProjectName',
        'quota' => 'Quota',
        'regionId' => 'RegionId',
        'shard' => 'Shard',
        'site' => 'Site',
        'ttl' => 'Ttl',
        'used' => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->maxSplitShard) {
            $res['MaxSplitShard'] = $this->maxSplitShard;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->shard) {
            $res['Shard'] = $this->shard;
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
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
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['MaxSplitShard'])) {
            $model->maxSplitShard = $map['MaxSplitShard'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Shard'])) {
            $model->shard = $map['Shard'];
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
