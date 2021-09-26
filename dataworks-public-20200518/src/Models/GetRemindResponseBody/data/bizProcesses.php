<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Tea\Model;

class bizProcesses extends Model
{
    /**
     * @var string
     */
    public $bizProcessName;

    /**
     * @var int
     */
    public $bizId;
    protected $_name = [
        'bizProcessName' => 'BizProcessName',
        'bizId'          => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizProcessName) {
            $res['BizProcessName'] = $this->bizProcessName;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizProcesses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizProcessName'])) {
            $model->bizProcessName = $map['BizProcessName'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
