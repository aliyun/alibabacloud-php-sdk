<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

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
    public $resourceGroupId;
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
        'resourceGroupId'    => 'ResourceGroupId',
        'sid'                => 'Sid',
        'subMigrationJobIds' => 'SubMigrationJobIds',
        'topics'             => 'Topics',
    ];

    public function validate()
    {
        if (\is_array($this->subMigrationJobIds)) {
            Model::validateArray($this->subMigrationJobIds);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
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

        if (null !== $this->subMigrationJobIds) {
            if (\is_array($this->subMigrationJobIds)) {
                $res['SubMigrationJobIds'] = [];
                foreach ($this->subMigrationJobIds as $key1 => $value1) {
                    $res['SubMigrationJobIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                foreach ($this->topics as $key1 => $value1) {
                    $res['Topics'][$key1] = $value1;
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
            if (!empty($map['SubMigrationJobIds'])) {
                $model->subMigrationJobIds = [];
                foreach ($map['SubMigrationJobIds'] as $key1 => $value1) {
                    $model->subMigrationJobIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                foreach ($map['Topics'] as $key1 => $value1) {
                    $model->topics[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
