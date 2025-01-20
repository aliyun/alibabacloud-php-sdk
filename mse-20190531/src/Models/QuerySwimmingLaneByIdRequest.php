<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class QuerySwimmingLaneByIdRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var int
     */
    public $laneId;
    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'laneId'         => 'LaneId',
        'namespace'      => 'Namespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
