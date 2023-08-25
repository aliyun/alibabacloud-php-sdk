<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyAuditLogConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CDC59E56-BD07-56CA-A05F-B7907DE5C862
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the status of SQL audit is updated. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $updateSucceed;
    protected $_name = [
        'requestId'     => 'RequestId',
        'updateSucceed' => 'UpdateSucceed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateSucceed) {
            $res['UpdateSucceed'] = $this->updateSucceed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAuditLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateSucceed'])) {
            $model->updateSucceed = $map['UpdateSucceed'];
        }

        return $model;
    }
}
