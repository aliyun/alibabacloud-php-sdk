<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmResponseBody\result;

use AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmResponseBody\result\meta\threshold;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @description The name of the filtering table.
     *
     * @example algorithmTest
     *
     * @var string
     */
    public $algorithmName;

    /**
     * @description The response body.
     *
     * @example 1_2
     *
     * @var string
     */
    public $category;

    /**
     * @description The fluctuation threshold for the size of the index.
     *
     * @example 0 0/12 0 * *
     *
     * @var string
     */
    public $cron;

    /**
     * @description The time when the filtering table was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed UTC.
     *
     * @example true
     *
     * @var bool
     */
    public $cronEnabled;

    /**
     * @description The description of the filtering table.
     *
     * @example xx
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the MaxCompute project.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @description The information about the filtering table.
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description Indicates whether the scheduled task is enabled.
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the filtering table.
     *
     * @example testname
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The CRON expression of the scheduled task. Example: 0 0/12 0 \\* \\*, which indicates that the task is scheduled at 00:00 and 12:00 every day.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The metadata of the filtering table.
     *
     * @example table_test
     *
     * @var string
     */
    public $tableName;

    /**
     * @description 0 0/12 0 * *"
     *
     * @var threshold
     */
    public $threshold;

    /**
     * @description The ID of the request.
     *
     * @example ODPS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'algorithmName' => 'algorithmName',
        'category'      => 'category',
        'cron'          => 'cron',
        'cronEnabled'   => 'cronEnabled',
        'description'   => 'description',
        'extInfo'       => 'extInfo',
        'gmtCreate'     => 'gmtCreate',
        'gmtModified'   => 'gmtModified',
        'projectName'   => 'projectName',
        'status'        => 'status',
        'tableName'     => 'tableName',
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
            $res['extInfo'] = $this->extInfo;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
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
            $model->extInfo = $map['extInfo'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
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
