<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $consoleUrl;
    protected $_name = [
        'regionId'   => 'regionId',
        'endpoint'   => 'endpoint',
        'localName'  => 'localName',
        'consoleUrl' => 'consoleUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }
        if (null !== $this->consoleUrl) {
            $res['consoleUrl'] = $this->consoleUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }
        if (isset($map['consoleUrl'])) {
            $model->consoleUrl = $map['consoleUrl'];
        }

        return $model;
    }
}
