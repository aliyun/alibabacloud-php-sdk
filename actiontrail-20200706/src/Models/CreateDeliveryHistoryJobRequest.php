<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class CreateDeliveryHistoryJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $trailName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'trailName'   => 'TrailName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeliveryHistoryJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }

        return $model;
    }
}
