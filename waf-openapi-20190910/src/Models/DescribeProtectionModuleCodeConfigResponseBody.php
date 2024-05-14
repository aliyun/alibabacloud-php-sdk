<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeProtectionModuleCodeConfigResponseBody extends Model
{
    /**
     * @example [{"code":0,"name":"310000,530000,150000,110000,TW_01,220000,510000,120000,640000,340000,370000,140000,440000,450000,650000,320000,360000,130000,410000,330000,460000,420000,430000,MO_01,620000,350000,540000,520000,210000,500000,610000,630000,HK_01,230000","env":"online"}]
     *
     * @var string
     */
    public $codeConfigs;

    /**
     * @example BE3911B8-9D96-5B39-8875-503BBC9DA4BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codeConfigs' => 'CodeConfigs',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeConfigs) {
            $res['CodeConfigs'] = $this->codeConfigs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtectionModuleCodeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeConfigs'])) {
            $model->codeConfigs = $map['CodeConfigs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
