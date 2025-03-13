<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CheckSessionRequest extends Model
{
    /**
     * @example 11111
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 121dlsga4o7golrl1hoja
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'projectId' => 'projectId',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
