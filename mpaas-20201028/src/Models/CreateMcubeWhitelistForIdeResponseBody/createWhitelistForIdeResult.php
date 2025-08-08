<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeWhitelistForIdeResponseBody;

use AlibabaCloud\Dara\Model;

class createWhitelistForIdeResult extends Model
{
    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $whitelistId;
    protected $_name = [
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
        'whitelistId' => 'WhitelistId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->whitelistId) {
            $res['WhitelistId'] = $this->whitelistId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['WhitelistId'])) {
            $model->whitelistId = $map['WhitelistId'];
        }

        return $model;
    }
}
