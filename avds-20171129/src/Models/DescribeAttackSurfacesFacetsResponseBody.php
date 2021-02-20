<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackSurfacesFacetsResponseBody extends Model
{
    /**
     * @var int
     */
    public $domains;

    /**
     * @var int
     */
    public $hosts;

    /**
     * @var int
     */
    public $webPaths;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $DNSMap;

    /**
     * @var int
     */
    public $webServers;

    /**
     * @var int
     */
    public $ports;

    /**
     * @var int
     */
    public $crawlerRequests;

    /**
     * @var int
     */
    public $webTechs;

    /**
     * @var int
     */
    public $subdomains;
    protected $_name = [
        'domains'         => 'Domains',
        'hosts'           => 'Hosts',
        'webPaths'        => 'WebPaths',
        'requestId'       => 'RequestId',
        'DNSMap'          => 'DNSMap',
        'webServers'      => 'WebServers',
        'ports'           => 'Ports',
        'crawlerRequests' => 'CrawlerRequests',
        'webTechs'        => 'WebTechs',
        'subdomains'      => 'Subdomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = $this->hosts;
        }
        if (null !== $this->webPaths) {
            $res['WebPaths'] = $this->webPaths;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DNSMap) {
            $res['DNSMap'] = $this->DNSMap;
        }
        if (null !== $this->webServers) {
            $res['WebServers'] = $this->webServers;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->crawlerRequests) {
            $res['CrawlerRequests'] = $this->crawlerRequests;
        }
        if (null !== $this->webTechs) {
            $res['WebTechs'] = $this->webTechs;
        }
        if (null !== $this->subdomains) {
            $res['Subdomains'] = $this->subdomains;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttackSurfacesFacetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }
        if (isset($map['Hosts'])) {
            $model->hosts = $map['Hosts'];
        }
        if (isset($map['WebPaths'])) {
            $model->webPaths = $map['WebPaths'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DNSMap'])) {
            $model->DNSMap = $map['DNSMap'];
        }
        if (isset($map['WebServers'])) {
            $model->webServers = $map['WebServers'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['CrawlerRequests'])) {
            $model->crawlerRequests = $map['CrawlerRequests'];
        }
        if (isset($map['WebTechs'])) {
            $model->webTechs = $map['WebTechs'];
        }
        if (isset($map['Subdomains'])) {
            $model->subdomains = $map['Subdomains'];
        }

        return $model;
    }
}
