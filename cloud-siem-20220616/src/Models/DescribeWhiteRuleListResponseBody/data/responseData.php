<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression;
use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The alert name.
     *
     * @example Try SNMP weak password
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The ID of the alert name.
     *
     * @example Try SNMP weak password
     *
     * @var string
     */
    public $alertNameId;

    /**
     * @description The alert type.
     *
     * @example scan
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The ID of the alert type.
     *
     * @example scan
     *
     * @var string
     */
    public $alertTypeId;

    /**
     * @description The UUID of the alert.
     *
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @description The ID of the Alibaba Cloud account that is used to purchase the threat analysis feature.
     *
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @description The conditions in the rule. The value is a JSON array.
     *
     * @example [{"conditions":[{"isNot":false,"itemId":0,"left":{"value":"host_uuid.host_name"},"operator":"containsString","right":{"value":"Cloud-MCH"}}]}]
     *
     * @var expression
     */
    public $expression;

    /**
     * @description The time when the whitelist rule was created.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the whitelist rule was modified.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the whitelist rule.
     *
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The status of the whitelist rule. Valid values:
     *
     *   1: enabled
     *   0: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the whitelist rule.
     *
     * @example 176555323***
     *
     * @var int
     */
    public $subAliuid;
    protected $_name = [
        'alertName'    => 'AlertName',
        'alertNameId'  => 'AlertNameId',
        'alertType'    => 'AlertType',
        'alertTypeId'  => 'AlertTypeId',
        'alertUuid'    => 'AlertUuid',
        'aliuid'       => 'Aliuid',
        'expression'   => 'Expression',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'status'       => 'Status',
        'subAliuid'    => 'SubAliuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Expression'] = null !== $this->expression ? $this->expression->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return responseData
     */
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
