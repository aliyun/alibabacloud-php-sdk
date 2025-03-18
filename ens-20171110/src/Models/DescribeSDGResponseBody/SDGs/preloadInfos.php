<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGResponseBody\SDGs;

use AlibabaCloud\Tea\Model;

class preloadInfos extends Model
{
    /**
     * @description The time when the SDG was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-02-16T06:18:40Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The namespace.
     *
     * @example test-20000
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of redundant replicas to quickly respond to shared mounts.
     *
     * @example 2
     *
     * @var int
     */
    public $redundantNum;

    /**
     * @description The ID of the node.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the status was last updated.
     *
     * @example 2021-01-22T08:17Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'namespace' => 'Namespace',
        'redundantNum' => 'RedundantNum',
        'regionId' => 'RegionId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->redundantNum) {
            $res['RedundantNum'] = $this->redundantNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preloadInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RedundantNum'])) {
            $model->redundantNum = $map['RedundantNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
