<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceResponseBody\instanceList\nodeInfo;

class instanceList extends Model
{
    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var int
     */
    public $dueTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var int
     */
    public $endExecuteTime;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $index;

    /**
     * @var nodeInfo
     */
    public $nodeInfo;

    /**
     * @var int
     */
    public $startExecuteTime;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizDate' => 'BizDate',
        'dueTime' => 'DueTime',
        'duration' => 'Duration',
        'endExecuteTime' => 'EndExecuteTime',
        'extendInfo' => 'ExtendInfo',
        'id' => 'Id',
        'index' => 'Index',
        'nodeInfo' => 'NodeInfo',
        'startExecuteTime' => 'StartExecuteTime',
        'statusList' => 'StatusList',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->nodeInfo) {
            $this->nodeInfo->validate();
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->endExecuteTime) {
            $res['EndExecuteTime'] = $this->endExecuteTime;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->nodeInfo) {
            $res['NodeInfo'] = null !== $this->nodeInfo ? $this->nodeInfo->toArray($noStream) : $this->nodeInfo;
        }

        if (null !== $this->startExecuteTime) {
            $res['StartExecuteTime'] = $this->startExecuteTime;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EndExecuteTime'])) {
            $model->endExecuteTime = $map['EndExecuteTime'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['NodeInfo'])) {
            $model->nodeInfo = nodeInfo::fromMap($map['NodeInfo']);
        }

        if (isset($map['StartExecuteTime'])) {
            $model->startExecuteTime = $map['StartExecuteTime'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
