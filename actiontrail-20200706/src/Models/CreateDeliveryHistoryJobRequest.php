<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class CreateDeliveryHistoryJobRequest extends Model
{
    /**
     * @var string
     */
    public $trailName;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'trailName'   => 'TrailName',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('trailName', $this->trailName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
