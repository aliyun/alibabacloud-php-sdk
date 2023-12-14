<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCollectQualityResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCollectQualityResponseBody\returnValue\strongMethodSet;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCollectQualityResponseBody\returnValue\weakMethodSet;
use AlibabaCloud\Tea\Model;

class returnValue extends Model
{
    /**
     * @var string
     */
    public $actualExpression;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $connection;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $matchExpression;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var strongMethodSet[]
     */
    public $strongMethodSet;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var weakMethodSet[]
     */
    public $weakMethodSet;
    protected $_name = [
        'actualExpression' => 'ActualExpression',
        'bizDate'          => 'BizDate',
        'callbackUrl'      => 'CallbackUrl',
        'connection'       => 'Connection',
        'entityId'         => 'EntityId',
        'matchExpression'  => 'MatchExpression',
        'pluginName'       => 'PluginName',
        'strongMethodSet'  => 'StrongMethodSet',
        'tableGuid'        => 'TableGuid',
        'taskId'           => 'TaskId',
        'weakMethodSet'    => 'WeakMethodSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualExpression) {
            $res['ActualExpression'] = $this->actualExpression;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->strongMethodSet) {
            $res['StrongMethodSet'] = [];
            if (null !== $this->strongMethodSet && \is_array($this->strongMethodSet)) {
                $n = 0;
                foreach ($this->strongMethodSet as $item) {
                    $res['StrongMethodSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->weakMethodSet) {
            $res['WeakMethodSet'] = [];
            if (null !== $this->weakMethodSet && \is_array($this->weakMethodSet)) {
                $n = 0;
                foreach ($this->weakMethodSet as $item) {
                    $res['WeakMethodSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return returnValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualExpression'])) {
            $model->actualExpression = $map['ActualExpression'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['StrongMethodSet'])) {
            if (!empty($map['StrongMethodSet'])) {
                $model->strongMethodSet = [];
                $n                      = 0;
                foreach ($map['StrongMethodSet'] as $item) {
                    $model->strongMethodSet[$n++] = null !== $item ? strongMethodSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WeakMethodSet'])) {
            if (!empty($map['WeakMethodSet'])) {
                $model->weakMethodSet = [];
                $n                    = 0;
                foreach ($map['WeakMethodSet'] as $item) {
                    $model->weakMethodSet[$n++] = null !== $item ? weakMethodSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
