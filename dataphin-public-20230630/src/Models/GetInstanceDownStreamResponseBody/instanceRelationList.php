<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody\instanceRelationList\fieldInstanceList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceDownStreamResponseBody\instanceRelationList\instanceInfo;

class instanceRelationList extends Model
{
    /**
     * @var int
     */
    public $downStreamDepth;

    /**
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
     * @var string
     */
    public $runStatus;

    /**
     * @var string
     */
    public $selectStatus;

    /**
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

    public function validate()
    {
        if (\is_array($this->fieldInstanceList)) {
            Model::validateArray($this->fieldInstanceList);
        }
        if (null !== $this->instanceInfo) {
            $this->instanceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->fieldInstanceList) {
            if (\is_array($this->fieldInstanceList)) {
                $res['FieldInstanceList'] = [];
                $n1 = 0;
                foreach ($this->fieldInstanceList as $item1) {
                    $res['FieldInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toArray($noStream) : $this->instanceInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['FieldInstanceList'] as $item1) {
                    $model->fieldInstanceList[$n1++] = fieldInstanceList::fromMap($item1);
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
