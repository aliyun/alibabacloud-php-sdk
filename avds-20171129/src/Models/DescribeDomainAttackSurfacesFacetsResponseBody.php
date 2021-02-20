<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainAttackSurfacesFacetsResponseBody extends Model
{
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
    public $webServers;

    /**
     * @var int
     */
    public $crawlerRequests;

    /**
     * @var int
     */
    public $webTechs;
    protected $_name = [
        'webPaths'        => 'WebPaths',
        'requestId'       => 'RequestId',
        'webServers'      => 'WebServers',
        'crawlerRequests' => 'CrawlerRequests',
        'webTechs'        => 'WebTechs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webPaths) {
            $res['WebPaths'] = $this->webPaths;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webServers) {
            $res['WebServers'] = $this->webServers;
        }
        if (null !== $this->crawlerRequests) {
            $res['CrawlerRequests'] = $this->crawlerRequests;
        }
        if (null !== $this->webTechs) {
            $res['WebTechs'] = $this->webTechs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainAttackSurfacesFacetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebPaths'])) {
            $model->webPaths = $map['WebPaths'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebServers'])) {
            $model->webServers = $map['WebServers'];
        }
        if (isset($map['CrawlerRequests'])) {
            $model->crawlerRequests = $map['CrawlerRequests'];
        }
        if (isset($map['WebTechs'])) {
            $model->webTechs = $map['WebTechs'];
        }

        return $model;
    }
}
