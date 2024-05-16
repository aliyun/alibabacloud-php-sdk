<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetBaselineKeyPathRequest extends Model
{
    /**
     * @description The name of the event.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example 2020-07-07T00:00:00+0800
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The ID of the event.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $inGroupId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'bizdate'    => 'Bizdate',
        'inGroupId'  => 'InGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBaselineKeyPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }

        return $model;
    }
}
