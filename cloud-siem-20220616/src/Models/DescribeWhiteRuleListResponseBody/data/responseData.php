<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression;

class responseData extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertNameId;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertTypeId;

    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var expression
     */
    public $expression;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $subAliuid;
    protected $_name = [
        'alertName' => 'AlertName',
        'alertNameId' => 'AlertNameId',
        'alertType' => 'AlertType',
        'alertTypeId' => 'AlertTypeId',
        'alertUuid' => 'AlertUuid',
        'aliuid' => 'Aliuid',
        'expression' => 'Expression',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'status' => 'Status',
        'subAliuid' => 'SubAliuid',
    ];

    public function validate()
    {
        if (null !== $this->expression) {
            $this->expression->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->alertNameId) {
            $res['AlertNameId'] = $this->alertNameId;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->alertTypeId) {
            $res['AlertTypeId'] = $this->alertTypeId;
        }

        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->expression) {
            $res['Expression'] = null !== $this->expression ? $this->expression->toArray($noStream) : $this->expression;
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

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAliuid) {
            $res['SubAliuid'] = $this->subAliuid;
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['AlertNameId'])) {
            $model->alertNameId = $map['AlertNameId'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['AlertTypeId'])) {
            $model->alertTypeId = $map['AlertTypeId'];
        }

        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['Expression'])) {
            $model->expression = expression::fromMap($map['Expression']);
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

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAliuid'])) {
            $model->subAliuid = $map['SubAliuid'];
        }

        return $model;
    }
}
