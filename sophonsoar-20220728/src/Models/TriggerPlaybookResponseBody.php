<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class TriggerPlaybookResponseBody extends Model
{
    /**
     * @example BD5A8DB6-A42C-532B-BCE8-83E69550CD59
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 55E63C57-D6C8-5036-A770-5CB10AC807AA
     *
     * @var string
     */
    public $triggerUuid;
    protected $_name = [
        'requestId'   => 'RequestId',
        'triggerUuid' => 'TriggerUuid',
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
        if (null !== $this->triggerUuid) {
            $res['TriggerUuid'] = $this->triggerUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerPlaybookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TriggerUuid'])) {
            $model->triggerUuid = $map['TriggerUuid'];
        }

        return $model;
    }
}
