<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessLogsDownloadAttributeResponseBody\logsDownloadAttributes;

use AlibabaCloud\Tea\Model;

class logsDownloadAttribute extends Model
{
    /**
     * @description The CLB instance ID.
     *
     * @example lb-bp1b6c719dfa08ex*****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the Log Service project.
     *
     * @example test-log-project
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The name of the Logstore.
     *
     * @example test-log-store
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The type of access log. Only **layer7** is returned, which indicates Layer 7 access logs.
     *
     * @example layer7
     *
     * @var string
     */
    public $logType;

    /**
     * @description The region ID of the CLB instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'logProject'     => 'LogProject',
        'logStore'       => 'LogStore',
        'logType'        => 'LogType',
        'region'         => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logsDownloadAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
