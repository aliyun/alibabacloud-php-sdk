<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class ManualModerationResultRequest extends Model
{
    /**
     * @description Set of parameters required by the service, in JSON string format.
     * - TaskId: The task ID returned when the task was submitted.
     *
     * @example {\\"TaskId\\":\\"e5f2d886-4c23-440d-999c-bd98acde11b6\\"}
     *
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManualModerationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
