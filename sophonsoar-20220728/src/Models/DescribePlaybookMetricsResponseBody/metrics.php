<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @example This is a playbook for waf processing
     *
     * @var string
     */
    public $description;

    /**
     * @example demo name
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 10
     *
     * @var int
     */
    public $failNum;

    /**
     * @example 1655277397000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 10
     *
     * @var int
     */
    public $historyMd5;

    /**
     * @example 1683526277415
     *
     * @var int
     */
    public $lastRuntime;

    /**
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @example 0fbc9bdb-9ae3-4ef4-a709-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example 100
     *
     * @var int
     */
    public $succNum;
    protected $_name = [
        'active'       => 'Active',
        'description'  => 'Description',
        'displayName'  => 'DisplayName',
        'failNum'      => 'FailNum',
        'gmtCreate'    => 'GmtCreate',
        'historyMd5'   => 'HistoryMd5',
        'lastRuntime'  => 'LastRuntime',
        'ownType'      => 'OwnType',
        'playbookUuid' => 'PlaybookUuid',
        'succNum'      => 'SuccNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->failNum) {
            $res['FailNum'] = $this->failNum;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->historyMd5) {
            $res['HistoryMd5'] = $this->historyMd5;
        }
        if (null !== $this->lastRuntime) {
            $res['LastRuntime'] = $this->lastRuntime;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->succNum) {
            $res['SuccNum'] = $this->succNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FailNum'])) {
            $model->failNum = $map['FailNum'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['HistoryMd5'])) {
            $model->historyMd5 = $map['HistoryMd5'];
        }
        if (isset($map['LastRuntime'])) {
            $model->lastRuntime = $map['LastRuntime'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['SuccNum'])) {
            $model->succNum = $map['SuccNum'];
        }

        return $model;
    }
}
