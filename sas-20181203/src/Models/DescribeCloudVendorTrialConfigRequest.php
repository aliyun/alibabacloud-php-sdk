<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudVendorTrialConfigRequest extends Model
{
    /**
     * @description Unique ID of the AK.
     *
     * > You can call [DescribeCloudVendorAccountAKList](~~DescribeCloudVendorAccountAKList~~) to get the AuthId.
     * > -
     *
     * This parameter is required.
     *
     * @example 23**
     *
     * @var int
     */
    public $authId;

    /**
     * @description Cloud asset vendor. Values:
     * - **Tencent**: Tencent Cloud
     * - **AWS**: Amazon Web Services
     *
     * This parameter is required.
     *
     * @example AWS
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'authId' => 'AuthId',
        'vendor' => 'Vendor',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudVendorTrialConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
