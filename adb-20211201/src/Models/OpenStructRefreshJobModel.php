<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenStructRefreshJobModel extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processid;

    /**
     * @var string
     */
    public $refreshInterval;

    /**
     * @var string
     */
    public $refreshModel;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'EndTime',
        'name' => 'Name',
        'processid' => 'Processid',
        'refreshInterval' => 'RefreshInterval',
        'refreshModel' => 'RefreshModel',
        'resourceGroup' => 'ResourceGroup',
        'schemaName' => 'SchemaName',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->processid) {
            $res['Processid'] = $this->processid;
        }

        if (null !== $this->refreshInterval) {
            $res['RefreshInterval'] = $this->refreshInterval;
        }

        if (null !== $this->refreshModel) {
            $res['RefreshModel'] = $this->refreshModel;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Processid'])) {
            $model->processid = $map['Processid'];
        }

        if (isset($map['RefreshInterval'])) {
            $model->refreshInterval = $map['RefreshInterval'];
        }

        if (isset($map['RefreshModel'])) {
            $model->refreshModel = $map['RefreshModel'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
