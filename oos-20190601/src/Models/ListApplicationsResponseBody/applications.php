<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsResponseBody\applications\cloudMonitorRule;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $isSystem;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var cloudMonitorRule
     */
    public $cloudMonitorRule;
    protected $_name = [
        'type'             => 'Type',
        'isSystem'         => 'IsSystem',
        'description'      => 'Description',
        'updateDate'       => 'UpdateDate',
        'resourceGroupId'  => 'ResourceGroupId',
        'createdDate'      => 'CreatedDate',
        'name'             => 'Name',
        'cloudMonitorRule' => 'CloudMonitorRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isSystem) {
            $res['IsSystem'] = $this->isSystem;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->cloudMonitorRule) {
            $res['CloudMonitorRule'] = null !== $this->cloudMonitorRule ? $this->cloudMonitorRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsSystem'])) {
            $model->isSystem = $map['IsSystem'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CloudMonitorRule'])) {
            $model->cloudMonitorRule = cloudMonitorRule::fromMap($map['CloudMonitorRule']);
        }

        return $model;
    }
}
