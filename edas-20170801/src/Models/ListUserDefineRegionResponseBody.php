<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList;
use AlibabaCloud\Tea\Model;

class ListUserDefineRegionResponseBody extends Model
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
     * @description The ID of the request.
     *
     * @example b197-40ab-9155-****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The namespaces.
     *
     * @var userDefineRegionList
     */
    public $userDefineRegionList;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'userDefineRegionList' => 'UserDefineRegionList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userDefineRegionList) {
            $res['UserDefineRegionList'] = null !== $this->userDefineRegionList ? $this->userDefineRegionList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserDefineRegionResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserDefineRegionList'])) {
            $model->userDefineRegionList = userDefineRegionList::fromMap($map['UserDefineRegionList']);
        }

        return $model;
    }
}
