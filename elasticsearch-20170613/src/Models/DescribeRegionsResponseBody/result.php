<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeRegionsResponseBody;

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
    public $status;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $consoleEndpoint;
    protected $_name = [
        'regionId'        => 'regionId',
        'status'          => 'status',
        'regionEndpoint'  => 'regionEndpoint',
        'localName'       => 'localName',
        'consoleEndpoint' => 'consoleEndpoint',
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->regionEndpoint) {
            $res['regionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }
        if (null !== $this->consoleEndpoint) {
            $res['consoleEndpoint'] = $this->consoleEndpoint;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['regionEndpoint'])) {
            $model->regionEndpoint = $map['regionEndpoint'];
        }
        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }
        if (isset($map['consoleEndpoint'])) {
            $model->consoleEndpoint = $map['consoleEndpoint'];
        }

        return $model;
    }
}
