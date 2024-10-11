<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result\meta\extInfo;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result\meta\threshold;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The name of the filtering algorithm.
     *
     * @example user
     *
     * @var string
     */
    public $algorithmName;

    /**
     * @description The category of the filtering algorithm.
     *
     * @example i2i
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the cluster.
     *
     * @example 1001
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The CRON expression of the scheduled task. Example: 0 0/12 0 \\* \\*. The value indicates that the task is scheduled at 00:00 and 12:00 every day.
     *
     * @example 0 0/12 0 * *
     *
     * @var string
     */
    public $cron;

    /**
     * @description N/A
     *
     * @example true
     *
     * @var bool
     */
    public $cronEnabled;

    /**
     * @description The description of the filtering table.
     *
     * @example Training task
     *
     * @var string
     */
    public $description;

    /**
     * @description The additional information.
     *
     * @var extInfo
     */
    public $extInfo;

    /**
     * @description The type of the metadata.
     *
     * @example odps
     *
     * @var string
     */
    public $metaType;

    /**
     * @description The name of the project.
     *
     * @example name01
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the table.
     *
     * @example table01
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the task.
     *
     * @example test01
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The threshold.
     *
     * @var threshold
     */
    public $threshold;

    /**
     * @description The type of the data source. Only MaxCompute is supported.
     *
     * @example ODPS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'algorithmName' => 'algorithmName',
        'category'      => 'category',
        'clusterId'     => 'clusterId',
        'cron'          => 'cron',
        'cronEnabled'   => 'cronEnabled',
        'description'   => 'description',
        'extInfo'       => 'extInfo',
        'metaType'      => 'metaType',
        'projectName'   => 'projectName',
        'tableName'     => 'tableName',
        'taskId'        => 'taskId',
        'threshold'     => 'threshold',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['algorithmName'] = $this->algorithmName;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }
        if (null !== $this->cronEnabled) {
            $res['cronEnabled'] = $this->cronEnabled;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->extInfo) {
            $res['extInfo'] = null !== $this->extInfo ? $this->extInfo->toMap() : null;
        }
        if (null !== $this->metaType) {
            $res['metaType'] = $this->metaType;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->threshold) {
            $res['threshold'] = null !== $this->threshold ? $this->threshold->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithmName'])) {
            $model->algorithmName = $map['algorithmName'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }
        if (isset($map['cronEnabled'])) {
            $model->cronEnabled = $map['cronEnabled'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['extInfo'])) {
            $model->extInfo = extInfo::fromMap($map['extInfo']);
        }
        if (isset($map['metaType'])) {
            $model->metaType = $map['metaType'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['threshold'])) {
            $model->threshold = threshold::fromMap($map['threshold']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
