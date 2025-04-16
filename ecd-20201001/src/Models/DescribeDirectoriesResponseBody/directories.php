<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDirectoriesResponseBody\directories\ADConnectors;

class directories extends Model
{
    /**
     * @var ADConnectors[]
     */
    public $ADConnectors;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $customSecurityGroupId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string
     */
    public $dnsUserName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var string
     */
    public $domainUserName;

    /**
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trustPassword;
    protected $_name = [
        'ADConnectors' => 'ADConnectors',
        'creationTime' => 'CreationTime',
        'customSecurityGroupId' => 'CustomSecurityGroupId',
        'directoryId' => 'DirectoryId',
        'directoryType' => 'DirectoryType',
        'dnsAddress' => 'DnsAddress',
        'dnsUserName' => 'DnsUserName',
        'domainName' => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainUserName' => 'DomainUserName',
        'enableInternetAccess' => 'EnableInternetAccess',
        'name' => 'Name',
        'status' => 'Status',
        'trustPassword' => 'TrustPassword',
    ];

    public function validate()
    {
        if (\is_array($this->ADConnectors)) {
            Model::validateArray($this->ADConnectors);
        }
        if (\is_array($this->dnsAddress)) {
            Model::validateArray($this->dnsAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ADConnectors) {
            if (\is_array($this->ADConnectors)) {
                $res['ADConnectors'] = [];
                $n1 = 0;
                foreach ($this->ADConnectors as $item1) {
                    $res['ADConnectors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->customSecurityGroupId) {
            $res['CustomSecurityGroupId'] = $this->customSecurityGroupId;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }

        if (null !== $this->dnsAddress) {
            if (\is_array($this->dnsAddress)) {
                $res['DnsAddress'] = [];
                $n1 = 0;
                foreach ($this->dnsAddress as $item1) {
                    $res['DnsAddress'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dnsUserName) {
            $res['DnsUserName'] = $this->dnsUserName;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }

        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }

        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trustPassword) {
            $res['TrustPassword'] = $this->trustPassword;
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
        if (isset($map['ADConnectors'])) {
            if (!empty($map['ADConnectors'])) {
                $model->ADConnectors = [];
                $n1 = 0;
                foreach ($map['ADConnectors'] as $item1) {
                    $model->ADConnectors[$n1++] = ADConnectors::fromMap($item1);
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['CustomSecurityGroupId'])) {
            $model->customSecurityGroupId = $map['CustomSecurityGroupId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }

        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = [];
                $n1 = 0;
                foreach ($map['DnsAddress'] as $item1) {
                    $model->dnsAddress[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DnsUserName'])) {
            $model->dnsUserName = $map['DnsUserName'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }

        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }

        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrustPassword'])) {
            $model->trustPassword = $map['TrustPassword'];
        }

        return $model;
    }
}
