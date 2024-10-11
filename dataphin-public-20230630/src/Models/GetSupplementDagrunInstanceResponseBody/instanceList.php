<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunInstanceResponseBody\instanceList\nodeInfo;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @example 2024-04-01
     *
     * @var int
     */
    public $bizDate;

    /**
     * @example 2024-04-02
     *
     * @var int
     */
    public $dueTime;

    /**
     * @example 60
     *
     * @var string
     */
    public $duration;

    /**
     * @example 2024-04-12 00:25:02
     *
     * @var int
     */
    public $endExecuteTime;

    /**
     * @example {"a":"b"}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @example t_239496_20210411_246982077481
     *
     * @var string
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @var nodeInfo
     */
    public $nodeInfo;

    /**
     * @example 2024-04-12 00:00:00
     *
     * @var int
     */
    public $startExecuteTime;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @example SUPPLEMENT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizDate'          => 'BizDate',
        'dueTime'          => 'DueTime',
        'duration'         => 'Duration',
        'endExecuteTime'   => 'EndExecuteTime',
        'extendInfo'       => 'ExtendInfo',
        'id'               => 'Id',
        'index'            => 'Index',
        'nodeInfo'         => 'NodeInfo',
        'startExecuteTime' => 'StartExecuteTime',
        'statusList'       => 'StatusList',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NodeInfo'] = null !== $this->nodeInfo ? $this->nodeInfo->toMap() : null;
        }
        if (null !== $this->startExecuteTime) {
            $res['StartExecuteTime'] = $this->startExecuteTime;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
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
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
