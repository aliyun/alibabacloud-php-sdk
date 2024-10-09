<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderSessionListPopRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4546
     *
     * @var int
     */
    public $activityId;

    /**
     * @description This parameter is required.
     *
     * @example asdojzopf
     *
     * @var string
     */
    public $nfcId;
    protected $_name = [
        'activityId' => 'ActivityId',
        'nfcId'      => 'NfcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->nfcId) {
            $res['NfcId'] = $this->nfcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderSessionListPopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['NfcId'])) {
            $model->nfcId = $map['NfcId'];
        }

        return $model;
    }
}
