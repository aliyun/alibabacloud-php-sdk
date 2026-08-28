<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerResponseBody\data;

use AlibabaCloud\Dara\Model;

class virtualServiceList extends Model
{
    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $virtualServiceGroupId;

    /**
     * @var string
     */
    public $virtualServiceGroupName;
    protected $_name = [
        'port' => 'port',
        'protocol' => 'protocol',
        'virtualServiceGroupId' => 'virtualServiceGroupId',
        'virtualServiceGroupName' => 'virtualServiceGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->virtualServiceGroupId) {
            $res['virtualServiceGroupId'] = $this->virtualServiceGroupId;
        }

        if (null !== $this->virtualServiceGroupName) {
            $res['virtualServiceGroupName'] = $this->virtualServiceGroupName;
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
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['virtualServiceGroupId'])) {
            $model->virtualServiceGroupId = $map['virtualServiceGroupId'];
        }

        if (isset($map['virtualServiceGroupName'])) {
            $model->virtualServiceGroupName = $map['virtualServiceGroupName'];
        }

        return $model;
    }
}
