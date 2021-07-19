<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponseBody\application\cloudMonitorRule;
use AlibabaCloud\Tea\Model;

class application extends Model
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
    public $name;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var cloudMonitorRule
     */
    public $cloudMonitorRule;
    protected $_name = [
        'type'             => 'Type',
        'isSystem'         => 'IsSystem',
        'description'      => 'Description',
        'updateDate'       => 'UpdateDate',
        'name'             => 'Name',
        'createDate'       => 'CreateDate',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['CloudMonitorRule'])) {
            $model->cloudMonitorRule = cloudMonitorRule::fromMap($map['CloudMonitorRule']);
        }

        return $model;
    }
}
