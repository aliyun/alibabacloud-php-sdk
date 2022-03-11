<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubscriptionMetaRequest extends Model
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
    public $sid;

    /**
     * @var mixed[]
     */
    public $subMigrationJobIds;

    /**
     * @var mixed[]
     */
    public $topics;
    protected $_name = [
        'dtsInstanceId'      => 'DtsInstanceId',
        'regionId'           => 'RegionId',
        'sid'                => 'Sid',
        'subMigrationJobIds' => 'SubMigrationJobIds',
        'topics'             => 'Topics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->subMigrationJobIds) {
            $res['SubMigrationJobIds'] = $this->subMigrationJobIds;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['SubMigrationJobIds'])) {
            $model->subMigrationJobIds = $map['SubMigrationJobIds'];
        }
        if (isset($map['Topics'])) {
            $model->topics = $map['Topics'];
        }

        return $model;
    }
}
