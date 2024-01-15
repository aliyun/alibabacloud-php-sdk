<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @example [{"aliUid":"2951869706989****","roleName":"ADMIN"},{"aliUid":"2557461687048****","roleName":"ADMIN"}]
     *
     * @var string
     */
    public $jsonStr;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'jsonStr'       => 'JsonStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->jsonStr) {
            $res['JsonStr'] = $this->jsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['JsonStr'])) {
            $model->jsonStr = $map['JsonStr'];
        }

        return $model;
    }
}
