<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopTimerResponseBody extends Model
{
    /**
     * @description The IDs of the cloud computers for which you successfully configure the scheduled task.
     *
     * @var string[]
     */
    public $desktopIds;

    /**
     * @description The request ID.
     *
     * @example 4638719F-3CAB-5704-BD54-55617BFF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopIds' => 'DesktopIds',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopIds) {
            $res['DesktopIds'] = $this->desktopIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopTimerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = $map['DesktopIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
