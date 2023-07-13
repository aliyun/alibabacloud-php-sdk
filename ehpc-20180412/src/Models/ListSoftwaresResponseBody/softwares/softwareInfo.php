<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo\applications;
use AlibabaCloud\Tea\Model;

class softwareInfo extends Model
{
    /**
     * @description The version of the E-HPC client.
     *
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The service type of the domain account. Valid values:
     *
     *   nis
     *   ldap
     *
     * @example 2.31
     *
     * @var string
     */
    public $accountVersion;

    /**
     * @description Indicates whether the software is required. Valid values:
     *
     *   false: optional
     *   true: required
     *
     * @var applications
     */
    public $applications;

    /**
     * @description The list of the software in the cluster.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @description The version of the scheduler.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The image tag of the cluster.
     *
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The version of the domain account service.
     *
     * @example 18.1.1
     *
     * @var string
     */
    public $schedulerVersion;
    protected $_name = [
        'accountType'      => 'AccountType',
        'accountVersion'   => 'AccountVersion',
        'applications'     => 'Applications',
        'ehpcVersion'      => 'EhpcVersion',
        'osTag'            => 'OsTag',
        'schedulerType'    => 'SchedulerType',
        'schedulerVersion' => 'SchedulerVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountVersion) {
            $res['AccountVersion'] = $this->accountVersion;
        }
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return softwareInfo
     */
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
