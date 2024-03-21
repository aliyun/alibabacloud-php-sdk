<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class DeleteSearchConditionRequest extends Model
{
    /**
     * @var int
     */
    public $conditionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $umid;
    protected $_name = [
        'conditionId' => 'ConditionId',
        'sessionId'   => 'SessionId',
        'umid'        => 'Umid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionId) {
            $res['ConditionId'] = $this->conditionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->umid) {
            $res['Umid'] = $this->umid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSearchConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionId'])) {
            $model->conditionId = $map['ConditionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Umid'])) {
            $model->umid = $map['Umid'];
        }

        return $model;
    }
}
