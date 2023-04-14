<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $consoleUrl;

    /**
     * @example 47.109.94.218
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example xxx
     *
     * @var string
     */
    public $localName;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'consoleUrl' => 'consoleUrl',
        'endpoint'   => 'endpoint',
        'localName'  => 'localName',
        'regionId'   => 'regionId',
        'status'     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleUrl) {
            $res['consoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['consoleUrl'])) {
            $model->consoleUrl = $map['consoleUrl'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
