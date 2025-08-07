<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssuesResponseBody\model;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $affectedUserCount;

    /**
     * @var int
     */
    public $allocSizeMax;

    /**
     * @var int
     */
    public $allocSizePct50;

    /**
     * @var int
     */
    public $allocSizePct70;

    /**
     * @var int
     */
    public $allocSizePct90;

    /**
     * @var string
     */
    public $digestHash;

    /**
     * @var string
     */
    public $domScore;

    /**
     * @var int
     */
    public $errorColumn;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $errorDeviceCount;

    /**
     * @var float
     */
    public $errorDeviceRate;

    /**
     * @var string
     */
    public $errorFileName;

    /**
     * @var int
     */
    public $errorLine;

    /**
     * @var string
     */
    public $errorName;

    /**
     * @var float
     */
    public $errorRate;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $firstVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $stack;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'affectedUserCount' => 'AffectedUserCount',
        'allocSizeMax' => 'AllocSizeMax',
        'allocSizePct50' => 'AllocSizePct50',
        'allocSizePct70' => 'AllocSizePct70',
        'allocSizePct90' => 'AllocSizePct90',
        'digestHash' => 'DigestHash',
        'domScore' => 'DomScore',
        'errorColumn' => 'ErrorColumn',
        'errorCount' => 'ErrorCount',
        'errorDeviceCount' => 'ErrorDeviceCount',
        'errorDeviceRate' => 'ErrorDeviceRate',
        'errorFileName' => 'ErrorFileName',
        'errorLine' => 'ErrorLine',
        'errorName' => 'ErrorName',
        'errorRate' => 'ErrorRate',
        'errorType' => 'ErrorType',
        'eventTime' => 'EventTime',
        'firstVersion' => 'FirstVersion',
        'name' => 'Name',
        'stack' => 'Stack',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedUserCount) {
            $res['AffectedUserCount'] = $this->affectedUserCount;
        }

        if (null !== $this->allocSizeMax) {
            $res['AllocSizeMax'] = $this->allocSizeMax;
        }

        if (null !== $this->allocSizePct50) {
            $res['AllocSizePct50'] = $this->allocSizePct50;
        }

        if (null !== $this->allocSizePct70) {
            $res['AllocSizePct70'] = $this->allocSizePct70;
        }

        if (null !== $this->allocSizePct90) {
            $res['AllocSizePct90'] = $this->allocSizePct90;
        }

        if (null !== $this->digestHash) {
            $res['DigestHash'] = $this->digestHash;
        }

        if (null !== $this->domScore) {
            $res['DomScore'] = $this->domScore;
        }

        if (null !== $this->errorColumn) {
            $res['ErrorColumn'] = $this->errorColumn;
        }

        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        if (null !== $this->errorDeviceCount) {
            $res['ErrorDeviceCount'] = $this->errorDeviceCount;
        }

        if (null !== $this->errorDeviceRate) {
            $res['ErrorDeviceRate'] = $this->errorDeviceRate;
        }

        if (null !== $this->errorFileName) {
            $res['ErrorFileName'] = $this->errorFileName;
        }

        if (null !== $this->errorLine) {
            $res['ErrorLine'] = $this->errorLine;
        }

        if (null !== $this->errorName) {
            $res['ErrorName'] = $this->errorName;
        }

        if (null !== $this->errorRate) {
            $res['ErrorRate'] = $this->errorRate;
        }

        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->firstVersion) {
            $res['FirstVersion'] = $this->firstVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AffectedUserCount'])) {
            $model->affectedUserCount = $map['AffectedUserCount'];
        }

        if (isset($map['AllocSizeMax'])) {
            $model->allocSizeMax = $map['AllocSizeMax'];
        }

        if (isset($map['AllocSizePct50'])) {
            $model->allocSizePct50 = $map['AllocSizePct50'];
        }

        if (isset($map['AllocSizePct70'])) {
            $model->allocSizePct70 = $map['AllocSizePct70'];
        }

        if (isset($map['AllocSizePct90'])) {
            $model->allocSizePct90 = $map['AllocSizePct90'];
        }

        if (isset($map['DigestHash'])) {
            $model->digestHash = $map['DigestHash'];
        }

        if (isset($map['DomScore'])) {
            $model->domScore = $map['DomScore'];
        }

        if (isset($map['ErrorColumn'])) {
            $model->errorColumn = $map['ErrorColumn'];
        }

        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        if (isset($map['ErrorDeviceCount'])) {
            $model->errorDeviceCount = $map['ErrorDeviceCount'];
        }

        if (isset($map['ErrorDeviceRate'])) {
            $model->errorDeviceRate = $map['ErrorDeviceRate'];
        }

        if (isset($map['ErrorFileName'])) {
            $model->errorFileName = $map['ErrorFileName'];
        }

        if (isset($map['ErrorLine'])) {
            $model->errorLine = $map['ErrorLine'];
        }

        if (isset($map['ErrorName'])) {
            $model->errorName = $map['ErrorName'];
        }

        if (isset($map['ErrorRate'])) {
            $model->errorRate = $map['ErrorRate'];
        }

        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['FirstVersion'])) {
            $model->firstVersion = $map['FirstVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
