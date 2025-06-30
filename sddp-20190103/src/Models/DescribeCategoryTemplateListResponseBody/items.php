<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateListResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $currentRiskLevel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $maxCategoryLevel;

    /**
     * @var int
     */
    public $maxRiskLevel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $supportEdit;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'currentRiskLevel' => 'CurrentRiskLevel',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'maxCategoryLevel' => 'MaxCategoryLevel',
        'maxRiskLevel' => 'MaxRiskLevel',
        'name' => 'Name',
        'status' => 'Status',
        'supportEdit' => 'SupportEdit',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentRiskLevel) {
            $res['CurrentRiskLevel'] = $this->currentRiskLevel;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->maxCategoryLevel) {
            $res['MaxCategoryLevel'] = $this->maxCategoryLevel;
        }

        if (null !== $this->maxRiskLevel) {
            $res['MaxRiskLevel'] = $this->maxRiskLevel;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportEdit) {
            $res['SupportEdit'] = $this->supportEdit;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CurrentRiskLevel'])) {
            $model->currentRiskLevel = $map['CurrentRiskLevel'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MaxCategoryLevel'])) {
            $model->maxCategoryLevel = $map['MaxCategoryLevel'];
        }

        if (isset($map['MaxRiskLevel'])) {
            $model->maxRiskLevel = $map['MaxRiskLevel'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportEdit'])) {
            $model->supportEdit = $map['SupportEdit'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
