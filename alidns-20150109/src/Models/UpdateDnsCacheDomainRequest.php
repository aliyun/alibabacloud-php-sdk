<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainRequest\sourceDnsServer;

class UpdateDnsCacheDomainRequest extends Model
{
    /**
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var sourceDnsServer[]
     */
    public $sourceDnsServer;

    /**
     * @var string
     */
    public $sourceEdns;

    /**
     * @var string
     */
    public $sourceProtocol;
    protected $_name = [
        'cacheTtlMax' => 'CacheTtlMax',
        'cacheTtlMin' => 'CacheTtlMin',
        'domainName' => 'DomainName',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'sourceDnsServer' => 'SourceDnsServer',
        'sourceEdns' => 'SourceEdns',
        'sourceProtocol' => 'SourceProtocol',
    ];

    public function validate()
    {
        if (\is_array($this->sourceDnsServer)) {
            Model::validateArray($this->sourceDnsServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheTtlMax) {
            $res['CacheTtlMax'] = $this->cacheTtlMax;
        }

        if (null !== $this->cacheTtlMin) {
            $res['CacheTtlMin'] = $this->cacheTtlMin;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceDnsServer) {
            if (\is_array($this->sourceDnsServer)) {
                $res['SourceDnsServer'] = [];
                $n1 = 0;
                foreach ($this->sourceDnsServer as $item1) {
                    $res['SourceDnsServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceEdns) {
            $res['SourceEdns'] = $this->sourceEdns;
        }

        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
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
        if (isset($map['CacheTtlMax'])) {
            $model->cacheTtlMax = $map['CacheTtlMax'];
        }

        if (isset($map['CacheTtlMin'])) {
            $model->cacheTtlMin = $map['CacheTtlMin'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceDnsServer'])) {
            if (!empty($map['SourceDnsServer'])) {
                $model->sourceDnsServer = [];
                $n1 = 0;
                foreach ($map['SourceDnsServer'] as $item1) {
                    $model->sourceDnsServer[$n1] = sourceDnsServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceEdns'])) {
            $model->sourceEdns = $map['SourceEdns'];
        }

        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }

        return $model;
    }
}
