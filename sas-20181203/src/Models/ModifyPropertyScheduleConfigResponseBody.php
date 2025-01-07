<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyPropertyScheduleConfigResponseBody extends Model
{
    /**
     * @description Indicates whether the collection frequency of asset fingerprints is modified. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $modifyResult;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C0D1DF51-D879-55A8-B6C7-7D3B913EF34D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyResult' => 'ModifyResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyResult) {
            $res['ModifyResult'] = $this->modifyResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPropertyScheduleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyResult'])) {
            $model->modifyResult = $map['ModifyResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
