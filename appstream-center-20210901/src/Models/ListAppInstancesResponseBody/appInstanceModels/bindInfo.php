<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody\appInstanceModels;

use AlibabaCloud\Tea\Model;

class bindInfo extends Model
{
    /**
     * @example app.test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 2000
     *
     * @var int
     */
    public $usageDuration;
    protected $_name = [
        'endUserId'     => 'EndUserId',
        'usageDuration' => 'UsageDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->usageDuration) {
            $res['UsageDuration'] = $this->usageDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['UsageDuration'])) {
            $model->usageDuration = $map['UsageDuration'];
        }

        return $model;
    }
}
