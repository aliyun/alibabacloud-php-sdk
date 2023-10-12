<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceResponseBody\physicalSpace;
use AlibabaCloud\Tea\Model;

class GetPhysicalSpaceResponseBody extends Model
{
    /**
     * @var physicalSpace
     */
    public $physicalSpace;

    /**
     * @example a1c7e2b4-174e-4557-a96d-d4cbf83988a6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'physicalSpace' => 'PhysicalSpace',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalSpace) {
            $res['PhysicalSpace'] = null !== $this->physicalSpace ? $this->physicalSpace->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhysicalSpaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalSpace'])) {
            $model->physicalSpace = physicalSpace::fromMap($map['PhysicalSpace']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
