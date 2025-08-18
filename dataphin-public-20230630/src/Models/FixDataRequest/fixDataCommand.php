<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest\fixDataCommand\downStreamInstanceIdList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest\fixDataCommand\rootInstanceId;

class fixDataCommand extends Model
{
    /**
     * @var bool
     */
    public $containRootInstance;

    /**
     * @var downStreamInstanceIdList[]
     */
    public $downStreamInstanceIdList;

    /**
     * @var string
     */
    public $downstreamRange;

    /**
     * @var bool
     */
    public $forceRerun;

    /**
     * @var int
     */
    public $projectId;

    /**
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

    public function validate()
    {
        if (\is_array($this->downStreamInstanceIdList)) {
            Model::validateArray($this->downStreamInstanceIdList);
        }
        if (null !== $this->rootInstanceId) {
            $this->rootInstanceId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containRootInstance) {
            $res['ContainRootInstance'] = $this->containRootInstance;
        }

        if (null !== $this->downStreamInstanceIdList) {
            if (\is_array($this->downStreamInstanceIdList)) {
                $res['DownStreamInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->downStreamInstanceIdList as $item1) {
                    $res['DownStreamInstanceIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['RootInstanceId'] = null !== $this->rootInstanceId ? $this->rootInstanceId->toArray($noStream) : $this->rootInstanceId;
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
        if (isset($map['ContainRootInstance'])) {
            $model->containRootInstance = $map['ContainRootInstance'];
        }

        if (isset($map['DownStreamInstanceIdList'])) {
            if (!empty($map['DownStreamInstanceIdList'])) {
                $model->downStreamInstanceIdList = [];
                $n1 = 0;
                foreach ($map['DownStreamInstanceIdList'] as $item1) {
                    $model->downStreamInstanceIdList[$n1] = downStreamInstanceIdList::fromMap($item1);
                    ++$n1;
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
