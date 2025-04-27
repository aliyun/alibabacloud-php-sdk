<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $consoleEndpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'consoleEndpoint' => 'consoleEndpoint',
        'localName' => 'localName',
        'regionEndpoint' => 'regionEndpoint',
        'regionId' => 'regionId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleEndpoint) {
            $res['consoleEndpoint'] = $this->consoleEndpoint;
        }

        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }

        if (null !== $this->regionEndpoint) {
            $res['regionEndpoint'] = $this->regionEndpoint;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['consoleEndpoint'])) {
            $model->consoleEndpoint = $map['consoleEndpoint'];
        }

        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }

        if (isset($map['regionEndpoint'])) {
            $model->regionEndpoint = $map['regionEndpoint'];
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
