<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventOnStageResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventStageResponse extends Model
{
    /**
     * @description The platform that is supported by the feature of container threat detection. Valid values:
     *
     *   **container**
     *   **linux**
     *   **windows**
     *
     * @var mixed[]
     */
    public $securityEventOnStag;
    protected $_name = [
        'securityEventOnStag' => 'SecurityEventOnStag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityEventOnStag) {
            $res['SecurityEventOnStag'] = $this->securityEventOnStag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventStageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityEventOnStag'])) {
            $model->securityEventOnStag = $map['SecurityEventOnStag'];
        }

        return $model;
    }
}
