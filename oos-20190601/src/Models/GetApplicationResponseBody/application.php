<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody\application\cloudMonitorRule;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $isSystem;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $updatedDate;

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
        'isSystem'         => 'IsSystem',
        'description'      => 'Description',
        'updatedDate'      => 'UpdatedDate',
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
        if (null !== $this->isSystem) {
            $res['IsSystem'] = $this->isSystem;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
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
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSystem'])) {
            $model->isSystem = $map['IsSystem'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
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
