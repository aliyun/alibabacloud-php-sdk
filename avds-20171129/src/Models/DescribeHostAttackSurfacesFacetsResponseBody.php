<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostAttackSurfacesFacetsResponseBody extends Model
{
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
    public $ports;

    /**
     * @var int
     */
    public $crawlerRequests;

    /**
     * @var int
     */
    public $webTechs;
    protected $_name = [
        'hosts'           => 'Hosts',
        'webPaths'        => 'WebPaths',
        'requestId'       => 'RequestId',
        'ports'           => 'Ports',
        'crawlerRequests' => 'CrawlerRequests',
        'webTechs'        => 'WebTechs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = $this->hosts;
        }
        if (null !== $this->webPaths) {
            $res['WebPaths'] = $this->webPaths;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostAttackSurfacesFacetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            $model->hosts = $map['Hosts'];
        }
        if (isset($map['WebPaths'])) {
            $model->webPaths = $map['WebPaths'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
