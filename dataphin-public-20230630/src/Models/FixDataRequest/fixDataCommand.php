<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest\fixDataCommand\downStreamInstanceIdList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest\fixDataCommand\rootInstanceId;
use AlibabaCloud\Tea\Model;

class fixDataCommand extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $containRootInstance;

    /**
     * @var downStreamInstanceIdList[]
     */
    public $downStreamInstanceIdList;

    /**
     * @example ALL_INSTANCE
     *
     * @var string
     */
    public $downstreamRange;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceRerun;

    /**
     * @description This parameter is required.
     *
     * @example 132344
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var rootInstanceId
     */
    public $rootInstanceId;
    protected $_name = [
        'containRootInstance' => 'ContainRootInstance',
        'downStreamInstanceIdList' => 'DownStreamInstanceIdList',
        'downstreamRange' => 'DownstreamRange',
        'forceRerun' => 'ForceRerun',
        'projectId' => 'ProjectId',
        'rootInstanceId' => 'RootInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containRootInstance) {
            $res['ContainRootInstance'] = $this->containRootInstance;
        }
        if (null !== $this->downStreamInstanceIdList) {
            $res['DownStreamInstanceIdList'] = [];
            if (null !== $this->downStreamInstanceIdList && \is_array($this->downStreamInstanceIdList)) {
                $n = 0;
                foreach ($this->downStreamInstanceIdList as $item) {
                    $res['DownStreamInstanceIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->downstreamRange) {
            $res['DownstreamRange'] = $this->downstreamRange;
        }
        if (null !== $this->forceRerun) {
            $res['ForceRerun'] = $this->forceRerun;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->rootInstanceId) {
            $res['RootInstanceId'] = null !== $this->rootInstanceId ? $this->rootInstanceId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fixDataCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainRootInstance'])) {
            $model->containRootInstance = $map['ContainRootInstance'];
        }
        if (isset($map['DownStreamInstanceIdList'])) {
            if (!empty($map['DownStreamInstanceIdList'])) {
                $model->downStreamInstanceIdList = [];
                $n = 0;
                foreach ($map['DownStreamInstanceIdList'] as $item) {
                    $model->downStreamInstanceIdList[$n++] = null !== $item ? downStreamInstanceIdList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DownstreamRange'])) {
            $model->downstreamRange = $map['DownstreamRange'];
        }
        if (isset($map['ForceRerun'])) {
            $model->forceRerun = $map['ForceRerun'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RootInstanceId'])) {
            $model->rootInstanceId = rootInstanceId::fromMap($map['RootInstanceId']);
        }

        return $model;
    }
}
