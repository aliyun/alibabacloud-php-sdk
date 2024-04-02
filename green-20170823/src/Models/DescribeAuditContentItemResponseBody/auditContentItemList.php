<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentItemResponseBody;

use AlibabaCloud\Tea\Model;

class auditContentItemList extends Model
{
    /**
     * @var int
     */
    public $audit;

    /**
     * @var string[]
     */
    public $auditIllegalReasons;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var int
     */
    public $sn;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'audit'               => 'Audit',
        'auditIllegalReasons' => 'AuditIllegalReasons',
        'auditResult'         => 'AuditResult',
        'content'             => 'Content',
        'endTime'             => 'EndTime',
        'id'                  => 'Id',
        'parentTaskId'        => 'ParentTaskId',
        'sn'                  => 'Sn',
        'startTime'           => 'StartTime',
        'suggestion'          => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audit) {
            $res['Audit'] = $this->audit;
        }
        if (null !== $this->auditIllegalReasons) {
            $res['AuditIllegalReasons'] = $this->auditIllegalReasons;
        }
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditContentItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audit'])) {
            $model->audit = $map['Audit'];
        }
        if (isset($map['AuditIllegalReasons'])) {
            if (!empty($map['AuditIllegalReasons'])) {
                $model->auditIllegalReasons = $map['AuditIllegalReasons'];
            }
        }
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
