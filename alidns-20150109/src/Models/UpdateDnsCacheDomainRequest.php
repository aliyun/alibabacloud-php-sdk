<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainRequest\sourceDnsServer;
use AlibabaCloud\Tea\Model;

class UpdateDnsCacheDomainRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @var string
     */
    public $sourceProtocol;

    /**
     * @var string
     */
    public $sourceEdns;

    /**
     * @var sourceDnsServer[]
     */
    public $sourceDnsServer;
    protected $_name = [
        'lang'            => 'Lang',
        'domainName'      => 'DomainName',
        'instanceId'      => 'InstanceId',
        'cacheTtlMin'     => 'CacheTtlMin',
        'cacheTtlMax'     => 'CacheTtlMax',
        'sourceProtocol'  => 'SourceProtocol',
        'sourceEdns'      => 'SourceEdns',
        'sourceDnsServer' => 'SourceDnsServer',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->cacheTtlMin) {
            $res['CacheTtlMin'] = $this->cacheTtlMin;
        }
        if (null !== $this->cacheTtlMax) {
            $res['CacheTtlMax'] = $this->cacheTtlMax;
        }
        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }
        if (null !== $this->sourceEdns) {
            $res['SourceEdns'] = $this->sourceEdns;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsCacheDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CacheTtlMin'])) {
            $model->cacheTtlMin = $map['CacheTtlMin'];
        }
        if (isset($map['CacheTtlMax'])) {
            $model->cacheTtlMax = $map['CacheTtlMax'];
        }
        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }
        if (isset($map['SourceEdns'])) {
            $model->sourceEdns = $map['SourceEdns'];
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

        return $model;
    }
}
