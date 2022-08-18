<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsCacheDomainRequest\sourceDnsServer;
use AlibabaCloud\Tea\Model;

class AddDnsCacheDomainRequest extends Model
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
     * @var string
     */
    public $remark;

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
        'cacheTtlMax'     => 'CacheTtlMax',
        'cacheTtlMin'     => 'CacheTtlMin',
        'domainName'      => 'DomainName',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'remark'          => 'Remark',
        'sourceDnsServer' => 'SourceDnsServer',
        'sourceEdns'      => 'SourceEdns',
        'sourceProtocol'  => 'SourceProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceDnsServer) {
            $res['SourceDnsServer'] = [];
            if (null !== $this->sourceDnsServer && \is_array($this->sourceDnsServer)) {
                $n = 0;
                foreach ($this->sourceDnsServer as $item) {
                    $res['SourceDnsServer'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return AddDnsCacheDomainRequest
     */
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceDnsServer'])) {
            if (!empty($map['SourceDnsServer'])) {
                $model->sourceDnsServer = [];
                $n                      = 0;
                foreach ($map['SourceDnsServer'] as $item) {
                    $model->sourceDnsServer[$n++] = null !== $item ? sourceDnsServer::fromMap($item) : $item;
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
