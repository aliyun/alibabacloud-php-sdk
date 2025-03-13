<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoResponseBody;

use AlibabaCloud\Tea\Model;

class queryResourceInfoList extends Model
{
    /**
     * @example a169e9ec18404edc9972afd80866dc97
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example FREE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'sessionId' => 'sessionId',
        'status'    => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryResourceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
