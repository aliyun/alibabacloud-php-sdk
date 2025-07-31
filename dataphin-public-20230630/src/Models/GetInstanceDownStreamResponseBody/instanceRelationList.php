<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody\instanceRelationList\fieldInstanceList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody\instanceRelationList\instanceInfo;
use AlibabaCloud\Tea\Model;

class instanceRelationList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $downStreamDepth;

    /**
     * @example {"a":"x"}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @var fieldInstanceList[]
     */
    public $fieldInstanceList;

    /**
     * @var instanceInfo
     */
    public $instanceInfo;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $runStatus;

    /**
     * @example OPTIONAL
     *
     * @var string
     */
    public $selectStatus;

    /**
     * @example FIELD_DELETED
     *
     * @var string
     */
    public $selectStatusCause;
    protected $_name = [
        'downStreamDepth' => 'DownStreamDepth',
        'extendInfo' => 'ExtendInfo',
        'fieldInstanceList' => 'FieldInstanceList',
        'instanceInfo' => 'InstanceInfo',
        'runStatus' => 'RunStatus',
        'selectStatus' => 'SelectStatus',
        'selectStatusCause' => 'SelectStatusCause',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->fieldInstanceList) {
            $res['FieldInstanceList'] = [];
            if (null !== $this->fieldInstanceList && \is_array($this->fieldInstanceList)) {
                $n = 0;
                foreach ($this->fieldInstanceList as $item) {
                    $res['FieldInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }
        if (null !== $this->runStatus) {
            $res['RunStatus'] = $this->runStatus;
        }
        if (null !== $this->selectStatus) {
            $res['SelectStatus'] = $this->selectStatus;
        }
        if (null !== $this->selectStatusCause) {
            $res['SelectStatusCause'] = $this->selectStatusCause;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRelationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownStreamDepth'])) {
            $model->downStreamDepth = $map['DownStreamDepth'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FieldInstanceList'])) {
            if (!empty($map['FieldInstanceList'])) {
                $model->fieldInstanceList = [];
                $n = 0;
                foreach ($map['FieldInstanceList'] as $item) {
                    $model->fieldInstanceList[$n++] = null !== $item ? fieldInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }
        if (isset($map['RunStatus'])) {
            $model->runStatus = $map['RunStatus'];
        }
        if (isset($map['SelectStatus'])) {
            $model->selectStatus = $map['SelectStatus'];
        }
        if (isset($map['SelectStatusCause'])) {
            $model->selectStatusCause = $map['SelectStatusCause'];
        }

        return $model;
    }
}
