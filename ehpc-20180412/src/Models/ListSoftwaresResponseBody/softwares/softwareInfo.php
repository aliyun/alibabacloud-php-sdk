<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo\applications;

class softwareInfo extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountVersion;

    /**
     * @var applications
     */
    public $applications;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $schedulerVersion;
    protected $_name = [
        'accountType' => 'AccountType',
        'accountVersion' => 'AccountVersion',
        'applications' => 'Applications',
        'ehpcVersion' => 'EhpcVersion',
        'osTag' => 'OsTag',
        'schedulerType' => 'SchedulerType',
        'schedulerVersion' => 'SchedulerVersion',
    ];

    public function validate()
    {
        if (null !== $this->applications) {
            $this->applications->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->accountVersion) {
            $res['AccountVersion'] = $this->accountVersion;
        }

        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toArray($noStream) : $this->applications;
        }

        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        if (null !== $this->schedulerVersion) {
            $res['SchedulerVersion'] = $this->schedulerVersion;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['AccountVersion'])) {
            $model->accountVersion = $map['AccountVersion'];
        }

        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }

        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        if (isset($map['SchedulerVersion'])) {
            $model->schedulerVersion = $map['SchedulerVersion'];
        }

        return $model;
    }
}
