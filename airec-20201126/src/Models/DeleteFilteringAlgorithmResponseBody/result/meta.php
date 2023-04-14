<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result\meta\extInfo;
use AlibabaCloud\SDK\Airec\V20201126\Models\DeleteFilteringAlgorithmResponseBody\result\meta\threshold;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example user
     *
     * @var string
     */
    public $algorithmName;

    /**
     * @example i2i
     *
     * @var string
     */
    public $category;

    /**
     * @description id
     *
     * @example xxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $cron;

    /**
     * @example true
     *
     * @var bool
     */
    public $cronEnabled;

    /**
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @description xxx
     *
     * @var extInfo
     */
    public $extInfo;

    /**
     * @example xxx
     *
     * @var string
     */
    public $metaType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $projectName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $tableName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description xxx
     *
     * @var threshold
     */
    public $threshold;

    /**
     * @description xxx
     *
     * @example xxx
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
