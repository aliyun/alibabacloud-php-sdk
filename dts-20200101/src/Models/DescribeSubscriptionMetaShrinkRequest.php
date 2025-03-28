<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeSubscriptionMetaShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $subMigrationJobIdsShrink;

    /**
     * @var string
     */
    public $topicsShrink;
    protected $_name = [
        'dtsInstanceId' => 'DtsInstanceId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'sid' => 'Sid',
        'subMigrationJobIdsShrink' => 'SubMigrationJobIds',
        'topicsShrink' => 'Topics',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        if (null !== $this->subMigrationJobIdsShrink) {
            $res['SubMigrationJobIds'] = $this->subMigrationJobIdsShrink;
        }

        if (null !== $this->topicsShrink) {
            $res['Topics'] = $this->topicsShrink;
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
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        if (isset($map['SubMigrationJobIds'])) {
            $model->subMigrationJobIdsShrink = $map['SubMigrationJobIds'];
        }

        if (isset($map['Topics'])) {
            $model->topicsShrink = $map['Topics'];
        }

        return $model;
    }
}
