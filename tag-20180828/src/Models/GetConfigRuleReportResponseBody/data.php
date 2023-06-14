<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\GetConfigRuleReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the report was generated. This value is a UNIX timestamp.
     *
     * @example 1655089159000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The ID of the report.
     *
     * @example crp-ao0786618088006c****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The ID of the object.
     *
     * >  This parameter is returned if you set the `TargetType` and `TargetId` parameters in the current request to the same values as the parameters that are configured when you call the [GenerateConfigRuleReport](~~433313~~) operation to generate the report.
     * @example 154950938137****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the object. Valid values:
     *
     *   USER: the current logon account. This value is available if you use the Tag Policy feature in single-account mode.
     *   ROOT: the Root folder in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   FOLDER: a folder other than the Root folder in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *   ACCOUNT: a member in the resource directory. This value is available if you use the Tag Policy feature in multi-account mode.
     *
     * >  This parameter is returned if you set the `TargetType` and `TargetId` parameters in the current request to the same values as the parameters that are configured when you call the [GenerateConfigRuleReport](~~433313~~) operation to generate the report.
     * @example ACCOUNT
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'reportId'    => 'ReportId',
        'targetId'    => 'TargetId',
        'targetType'  => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
