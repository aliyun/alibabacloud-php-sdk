<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceRequest\operateCommand\instanceIdList;
use AlibabaCloud\Tea\Model;

class operateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var instanceIdList[]
     */
    public $instanceIdList;

    /**
     * @description This parameter is required.
     *
     * @example RERUN
     *
     * @var string
     */
    public $operation;

    /**
     * @description This parameter is required.
     *
     * @example 132311
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'instanceIdList' => 'InstanceIdList',
        'operation' => 'Operation',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = [];
            if (null !== $this->instanceIdList && \is_array($this->instanceIdList)) {
                $n = 0;
                foreach ($this->instanceIdList as $item) {
                    $res['InstanceIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = [];
                $n = 0;
                foreach ($map['InstanceIdList'] as $item) {
                    $model->instanceIdList[$n++] = null !== $item ? instanceIdList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
