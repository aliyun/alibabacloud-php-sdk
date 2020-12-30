<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterADDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $taskFinished;

    /**
     * @var bool
     */
    public $isSupported;

    /**
     * @var string
     */
    public $domainDnsIp;
    protected $_name = [
        'taskId'       => 'TaskId',
        'requestId'    => 'RequestId',
        'domainName'   => 'DomainName',
        'taskFinished' => 'TaskFinished',
        'isSupported'  => 'IsSupported',
        'domainDnsIp'  => 'DomainDnsIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }
        if (null !== $this->isSupported) {
            $res['IsSupported'] = $this->isSupported;
        }
        if (null !== $this->domainDnsIp) {
            $res['DomainDnsIp'] = $this->domainDnsIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterADDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }
        if (isset($map['IsSupported'])) {
            $model->isSupported = $map['IsSupported'];
        }
        if (isset($map['DomainDnsIp'])) {
            $model->domainDnsIp = $map['DomainDnsIp'];
        }

        return $model;
    }
}
