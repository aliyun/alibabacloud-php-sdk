<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterADDomainResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isSupported;

    /**
     * @var bool
     */
    public $taskFinished;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainDnsIp;
    protected $_name = [
        'requestId'    => 'RequestId',
        'isSupported'  => 'IsSupported',
        'taskFinished' => 'TaskFinished',
        'taskId'       => 'TaskId',
        'domainName'   => 'DomainName',
        'domainDnsIp'  => 'DomainDnsIp',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isSupported', $this->isSupported, true);
        Model::validateRequired('taskFinished', $this->taskFinished, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainDnsIp', $this->domainDnsIp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isSupported) {
            $res['IsSupported'] = $this->isSupported;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainDnsIp) {
            $res['DomainDnsIp'] = $this->domainDnsIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterADDomainResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsSupported'])) {
            $model->isSupported = $map['IsSupported'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainDnsIp'])) {
            $model->domainDnsIp = $map['DomainDnsIp'];
        }

        return $model;
    }
}
