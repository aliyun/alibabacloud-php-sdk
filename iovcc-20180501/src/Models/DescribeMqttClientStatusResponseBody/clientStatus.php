<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttClientStatusResponseBody;

use AlibabaCloud\Tea\Model;

class clientStatus extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $cleanSession;

    /**
     * @var int
     */
    public $lastUpdate;
    protected $_name = [
        'status'       => 'Status',
        'cleanSession' => 'CleanSession',
        'lastUpdate'   => 'LastUpdate',
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
        if (null !== $this->cleanSession) {
            $res['CleanSession'] = $this->cleanSession;
        }
        if (null !== $this->lastUpdate) {
            $res['LastUpdate'] = $this->lastUpdate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CleanSession'])) {
            $model->cleanSession = $map['CleanSession'];
        }
        if (isset($map['LastUpdate'])) {
            $model->lastUpdate = $map['LastUpdate'];
        }

        return $model;
    }
}
