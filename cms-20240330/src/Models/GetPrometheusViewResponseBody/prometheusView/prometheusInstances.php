<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetPrometheusViewResponseBody\prometheusView;

use AlibabaCloud\Dara\Model;

class prometheusInstances extends Model
{
    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'prometheusInstanceId' => 'prometheusInstanceId',
        'regionId' => 'regionId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusInstanceId) {
            $res['prometheusInstanceId'] = $this->prometheusInstanceId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['prometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['prometheusInstanceId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
