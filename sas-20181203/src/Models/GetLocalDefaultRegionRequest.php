<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLocalDefaultRegionRequest extends Model
{
    /**
     * @description The cloud service provider. Valid values:
     *
     *   **Tencent**: Tencent Cloud.
     *   **HUAWEICLOUD**: Huawei Cloud.
     *   **Azure**: Microsoft Azure.
     *   **AWS**: Amazon Web Services (AWS).
     *
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLocalDefaultRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
