<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $consoleUrl;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'status'     => 'Status',
        'consoleUrl' => 'ConsoleUrl',
        'localName'  => 'LocalName',
        'endpoint'   => 'Endpoint',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
