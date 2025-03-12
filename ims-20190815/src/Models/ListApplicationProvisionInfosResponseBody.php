<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody\applicationProvisionInfos;
use AlibabaCloud\Tea\Model;

class ListApplicationProvisionInfosResponseBody extends Model
{
    /**
     * @description The information about the installed applications.
     *
     * @var applicationProvisionInfos
     */
    public $applicationProvisionInfos;

    /**
     * @description The request ID.
     *
     * @example E403EBFD-C997-489D-BFC7-37C05E66D67C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisionInfos' => 'ApplicationProvisionInfos',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationProvisionInfos) {
            $res['ApplicationProvisionInfos'] = null !== $this->applicationProvisionInfos ? $this->applicationProvisionInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationProvisionInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationProvisionInfos'])) {
            $model->applicationProvisionInfos = applicationProvisionInfos::fromMap($map['ApplicationProvisionInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
