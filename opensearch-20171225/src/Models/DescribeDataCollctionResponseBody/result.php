<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeDataCollctionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 1581065837
     *
     * @var int
     */
    public $created;

    /**
     * @description The type of data collected. Valid values:
     *
     *   behavior: behavioral data.
     *   item_info: project information.
     *   industry_specific: industry-specific data.
     *
     * @example BEHAVIOR
     *
     * @var string
     */
    public $dataCollectionType;

    /**
     * @description The ID of the data collection task.
     *
     * @example 286
     *
     * @var string
     */
    public $id;

    /**
     * @description The industry name. Valid values:
     *
     *   general
     *   ecommerce
     *
     * @example GENERAL
     *
     * @var string
     */
    public $industryName;

    /**
     * @description The name of the data collection task.
     *
     * @example os_function_test_v1
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the data collection feature. Valid values:
     *
     *   0: The feature is disabled.
     *   1: The feature is being enabled.
     *   2: The feature is enabled.
     *   3: The feature failed to be enabled.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The sundial ID.
     *
     * @example 1755
     *
     * @var string
     */
    public $sundialId;

    /**
     * @description The type of the source from which data was collected. Valid values:
     *
     *   server
     *   web
     *   app Note: Only server is supported.
     *
     * @example server
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the data collection task was updated.
     *
     * @example 1581065904
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'created'            => 'created',
        'dataCollectionType' => 'dataCollectionType',
        'id'                 => 'id',
        'industryName'       => 'industryName',
        'name'               => 'name',
        'status'             => 'status',
        'sundialId'          => 'sundialId',
        'type'               => 'type',
        'updated'            => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->dataCollectionType) {
            $res['dataCollectionType'] = $this->dataCollectionType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->industryName) {
            $res['industryName'] = $this->industryName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->sundialId) {
            $res['sundialId'] = $this->sundialId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['dataCollectionType'])) {
            $model->dataCollectionType = $map['dataCollectionType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['industryName'])) {
            $model->industryName = $map['industryName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['sundialId'])) {
            $model->sundialId = $map['sundialId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
