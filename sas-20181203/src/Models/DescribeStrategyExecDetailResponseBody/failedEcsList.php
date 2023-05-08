<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailResponseBody;

use AlibabaCloud\Tea\Model;

class failedEcsList extends Model
{
    /**
     * @example 115.28.XX.XX
     *
     * @var string
     */
    public $IP;

    /**
     * @example worker-k8s-for-cs-cf5741fb95c3a45d0864f0e4544dc****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 115.28.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.31.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example Detect timeout
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'IP'           => 'IP',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'reason'       => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedEcsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
