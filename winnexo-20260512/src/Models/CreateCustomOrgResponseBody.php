<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomOrgResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'corpId' => 'corpId',
        'corpName' => 'corpName',
        'message' => 'message',
        'platformType' => 'platformType',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corpName'] = $this->corpName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->platformType) {
            $res['platformType'] = $this->platformType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['corpName'])) {
            $model->corpName = $map['corpName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['platformType'])) {
            $model->platformType = $map['platformType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
