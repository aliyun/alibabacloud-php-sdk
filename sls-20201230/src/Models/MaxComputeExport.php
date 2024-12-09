<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MaxComputeExport extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var MaxComputeExportConfiguration
     */
    public $configuration;

    /**
     * @example 1714284115
     *
     * @var int
     */
    public $createTime;

    /**
     * @example odpsexport-demo
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example odpsexport-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1714284589
     *
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @description This parameter is required.
     *
     * @example export-general-1714033191-584993-hcl
     *
     * @var string
     */
    public $name;

    /**
     * @example c7f01719d9feb105fc9d8df92af62010
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configuration'    => 'configuration',
        'createTime'       => 'createTime',
        'description'      => 'description',
        'displayName'      => 'displayName',
        'lastModifiedTime' => 'lastModifiedTime',
        'name'             => 'name',
        'scheduleId'       => 'scheduleId',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->scheduleId) {
            $res['scheduleId'] = $this->scheduleId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaxComputeExport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = MaxComputeExportConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['scheduleId'])) {
            $model->scheduleId = $map['scheduleId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
