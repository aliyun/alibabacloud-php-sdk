<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionResponseBody\regionDefine;
use AlibabaCloud\Tea\Model;

class DeleteUserDefineRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var regionDefine
     */
    public $regionDefine;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'regionDefine' => 'RegionDefine',
        'code'         => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionDefine) {
            $res['RegionDefine'] = null !== $this->regionDefine ? $this->regionDefine->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserDefineRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionDefine'])) {
            $model->regionDefine = regionDefine::fromMap($map['RegionDefine']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
