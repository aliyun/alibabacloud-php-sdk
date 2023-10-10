<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionResponseBody\regionDefine;
use AlibabaCloud\Tea\Model;

class DeleteUserDefineRegionResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The custom namespace.
     *
     * @var regionDefine
     */
    public $regionDefine;

    /**
     * @description The ID of the request.
     *
     * @example 1234-1sda-321d-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'regionDefine' => 'RegionDefine',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionDefine) {
            $res['RegionDefine'] = null !== $this->regionDefine ? $this->regionDefine->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionDefine'])) {
            $model->regionDefine = regionDefine::fromMap($map['RegionDefine']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
