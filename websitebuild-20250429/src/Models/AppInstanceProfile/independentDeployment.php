<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AppInstanceProfile;

use AlibabaCloud\Dara\Model;

class independentDeployment extends Model
{
    /**
     * @var bool
     */
    public $canRetry;

    /**
     * @var string
     */
    public $deployArea;

    /**
     * @var string
     */
    public $dnsRecordType;

    /**
     * @var string
     */
    public $eligibility;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $independentIp;

    /**
     * @var string
     */
    public $serverSpec;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'canRetry' => 'CanRetry',
        'deployArea' => 'DeployArea',
        'dnsRecordType' => 'DnsRecordType',
        'eligibility' => 'Eligibility',
        'enableStatus' => 'EnableStatus',
        'independentIp' => 'IndependentIp',
        'serverSpec' => 'ServerSpec',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canRetry) {
            $res['CanRetry'] = $this->canRetry;
        }

        if (null !== $this->deployArea) {
            $res['DeployArea'] = $this->deployArea;
        }

        if (null !== $this->dnsRecordType) {
            $res['DnsRecordType'] = $this->dnsRecordType;
        }

        if (null !== $this->eligibility) {
            $res['Eligibility'] = $this->eligibility;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->independentIp) {
            $res['IndependentIp'] = $this->independentIp;
        }

        if (null !== $this->serverSpec) {
            $res['ServerSpec'] = $this->serverSpec;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CanRetry'])) {
            $model->canRetry = $map['CanRetry'];
        }

        if (isset($map['DeployArea'])) {
            $model->deployArea = $map['DeployArea'];
        }

        if (isset($map['DnsRecordType'])) {
            $model->dnsRecordType = $map['DnsRecordType'];
        }

        if (isset($map['Eligibility'])) {
            $model->eligibility = $map['Eligibility'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['IndependentIp'])) {
            $model->independentIp = $map['IndependentIp'];
        }

        if (isset($map['ServerSpec'])) {
            $model->serverSpec = $map['ServerSpec'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
