<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class FixCheckWarningsRequest extends Model
{
    /**
     * @var string
     */
    public $checkParams;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $retentionDays;
    /**
     * @var int
     */
    public $riskId;
    /**
     * @var string
     */
    public $snapshotName;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'checkParams'   => 'CheckParams',
        'lang'          => 'Lang',
        'retentionDays' => 'RetentionDays',
        'riskId'        => 'RiskId',
        'snapshotName'  => 'SnapshotName',
        'sourceIp'      => 'SourceIp',
        'uuids'         => 'Uuids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkParams) {
            $res['CheckParams'] = $this->checkParams;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }

        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['CheckParams'])) {
            $model->checkParams = $map['CheckParams'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
