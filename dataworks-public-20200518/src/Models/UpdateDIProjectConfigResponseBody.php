<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIProjectConfigResponseBody\data;
use AlibabaCloud\Tea\Model;

class UpdateDIProjectConfigResponseBody extends Model
{
    /**
     * @description Indicates whether the default global configuration of synchronization solutions was modified. Valid values:
     *
     *   success: The default global configuration of synchronization solutions was modified.
     *   fail: The default global configuration of synchronization solutions failed to be modified.
     *
     * @var data
     */
    public $data;

    /**
     * @description The information about the modification.
     *
     * @example 0000-ABCD-EFG
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request. You can use the ID to locate logs and troubleshoot issues.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDIProjectConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
