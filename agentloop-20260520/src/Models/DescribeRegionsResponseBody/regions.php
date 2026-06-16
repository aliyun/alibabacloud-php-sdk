<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcEndpoint;
    protected $_name = [
        'internetEndpoint' => 'internetEndpoint',
        'localName' => 'localName',
        'regionId' => 'regionId',
        'vpcEndpoint' => 'vpcEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetEndpoint) {
            $res['internetEndpoint'] = $this->internetEndpoint;
        }

        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->vpcEndpoint) {
            $res['vpcEndpoint'] = $this->vpcEndpoint;
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
        if (isset($map['internetEndpoint'])) {
            $model->internetEndpoint = $map['internetEndpoint'];
        }

        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['vpcEndpoint'])) {
            $model->vpcEndpoint = $map['vpcEndpoint'];
        }

        return $model;
    }
}
