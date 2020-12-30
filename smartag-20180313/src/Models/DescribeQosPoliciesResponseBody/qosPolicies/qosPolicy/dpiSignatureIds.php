<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies\qosPolicy;

use AlibabaCloud\Tea\Model;

class dpiSignatureIds extends Model
{
    /**
     * @var string[]
     */
    public $dpiSignatureId;
    protected $_name = [
        'dpiSignatureId' => 'DpiSignatureId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dpiSignatureId) {
            $res['DpiSignatureId'] = $this->dpiSignatureId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dpiSignatureIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DpiSignatureId'])) {
            if (!empty($map['DpiSignatureId'])) {
                $model->dpiSignatureId = $map['DpiSignatureId'];
            }
        }

        return $model;
    }
}
