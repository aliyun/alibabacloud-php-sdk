<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetOfficeConversionTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var OfficeConversionTask
     */
    public $officeConversionTask;
    protected $_name = [
        'requestId'            => 'RequestId',
        'officeConversionTask' => 'OfficeConversionTask',
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
        if (null !== $this->officeConversionTask) {
            $res['OfficeConversionTask'] = null !== $this->officeConversionTask ? $this->officeConversionTask->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeConversionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OfficeConversionTask'])) {
            $model->officeConversionTask = OfficeConversionTask::fromMap($map['OfficeConversionTask']);
        }

        return $model;
    }
}
