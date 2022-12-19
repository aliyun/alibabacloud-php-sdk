<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeScanTaskProgressResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example EA15BA8A-D631-4375-8D40-CB7C769B0279
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The progress of the virus scan task. Valid values:
     *
     *   **init**: The task is being initialized.
     *   **Processing**: The task is running.
     *   **Success**: The task is complete.
     *   **Failed**: The task fails.
     *
     * @example Success
     *
     * @var string
     */
    public $scanTaskProgress;

    /**
     * @description The information about the asset on which the virus scan task runs. The value is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **type**: the type of the asset on which the virus scan task runs. Valid values:
     *
     *   **groupId**: server group.
     *   **uuid**: server.
     *
     *   **name**: the name of the server group or server.
     *
     *   **target**: the asset on which the virus scan task runs. The value of this field varies based on the value of the type field.
     *
     *   If the value of **type** is **groupId**, the value of this field is the ID of the server group.
     *   If the value of **type** is **uuid**, the value of this field is the UUID of the server.
     *
     * @example [{"type":"uuid","name":"host001","target":"503201a7-14c6-4280-801b-1169ed42****"}]
     *
     * @var string
     */
    public $targetInfo;
    protected $_name = [
        'requestId'        => 'RequestId',
        'scanTaskProgress' => 'ScanTaskProgress',
        'targetInfo'       => 'TargetInfo',
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
        if (null !== $this->scanTaskProgress) {
            $res['ScanTaskProgress'] = $this->scanTaskProgress;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScanTaskProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanTaskProgress'])) {
            $model->scanTaskProgress = $map['ScanTaskProgress'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }

        return $model;
    }
}
