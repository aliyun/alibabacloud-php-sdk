<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class IgnoreHcCheckWarningsRequest extends Model
{
    /**
     * @var string
     */
    public $checkIds;
    /**
     * @var string
     */
    public $checkWarningIds;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $riskId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'checkIds'        => 'CheckIds',
        'checkWarningIds' => 'CheckWarningIds',
        'reason'          => 'Reason',
        'riskId'          => 'RiskId',
        'source'          => 'Source',
        'sourceIp'        => 'SourceIp',
        'type'            => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }

        if (null !== $this->checkWarningIds) {
            $res['CheckWarningIds'] = $this->checkWarningIds;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['CheckIds'])) {
            $model->checkIds = $map['CheckIds'];
        }

        if (isset($map['CheckWarningIds'])) {
            $model->checkWarningIds = $map['CheckWarningIds'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
