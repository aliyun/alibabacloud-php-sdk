<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class StopSessionClusterRequest extends Model
{
    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $sessionClusterId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'queueName' => 'queueName',
        'sessionClusterId' => 'sessionClusterId',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
