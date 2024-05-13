<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpResponseBody\ddosbgpInfo;
use AlibabaCloud\Tea\Model;

class DescribeBgpPackByIpResponseBody extends Model
{
    /**
     * @description The HTTP status code of the request.
     *
     * For more information about status codes, see [Common parameters](https://help.aliyun.com/document_detail/118841.html).
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The configurations of the instance that is associated with the asset.
     *
     * @var ddosbgpInfo
     */
    public $ddosbgpInfo;

    /**
     * @description The ID of the request.
     *
     * @example E46A08E4-A1CD-5BE9-B580-C4D6E9BC5484
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'        => 'Code',
        'ddosbgpInfo' => 'DdosbgpInfo',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ddosbgpInfo) {
            $res['DdosbgpInfo'] = null !== $this->ddosbgpInfo ? $this->ddosbgpInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpPackByIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DdosbgpInfo'])) {
            $model->ddosbgpInfo = ddosbgpInfo::fromMap($map['DdosbgpInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
