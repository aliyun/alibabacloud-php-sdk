<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $currentRiskLevel;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example 1582992000000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1545277010000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxCategoryLevel;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxRiskLevel;

    /**
     * @example built-in template
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $supportEdit;

    /**
     * @example 6
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'currentRiskLevel' => 'CurrentRiskLevel',
        'description'      => 'Description',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'maxCategoryLevel' => 'MaxCategoryLevel',
        'maxRiskLevel'     => 'MaxRiskLevel',
        'name'             => 'Name',
        'status'           => 'Status',
        'supportEdit'      => 'SupportEdit',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return items
     */
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
