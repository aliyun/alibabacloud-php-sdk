<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAckClusterPodLabelsRequest extends Model
{
    /**
     * @var string
     */
    public $connectorId;
    protected $_name = [
        'connectorId' => 'ConnectorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
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
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        return $model;
    }
}
