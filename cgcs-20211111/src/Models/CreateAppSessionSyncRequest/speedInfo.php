<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest;

use AlibabaCloud\Tea\Model;

class speedInfo extends Model
{
    /**
     * @var int
     */
    public $endpointId;

    /**
     * @var int
     */
    public $rtt;
    protected $_name = [
        'endpointId' => 'endpointId',
        'rtt'        => 'rtt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }
        if (null !== $this->rtt) {
            $res['rtt'] = $this->rtt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return speedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }
        if (isset($map['rtt'])) {
            $model->rtt = $map['rtt'];
        }

        return $model;
    }
}
