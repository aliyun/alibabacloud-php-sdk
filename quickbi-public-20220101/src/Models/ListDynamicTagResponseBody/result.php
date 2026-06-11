<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDynamicTagResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var int
     */
    public $relatedAttribute;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columnName' => 'ColumnName',
        'configId' => 'ConfigId',
        'configName' => 'ConfigName',
        'dsId' => 'DsId',
        'organizationId' => 'OrganizationId',
        'relatedAttribute' => 'RelatedAttribute',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        if (null !== $this->relatedAttribute) {
            $res['RelatedAttribute'] = $this->relatedAttribute;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        if (isset($map['RelatedAttribute'])) {
            $model->relatedAttribute = $map['RelatedAttribute'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
