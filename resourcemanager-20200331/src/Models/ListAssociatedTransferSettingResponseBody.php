<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody\associatedTransferSetting;
use AlibabaCloud\Tea\Model;

class ListAssociatedTransferSettingResponseBody extends Model
{
    /**
     * @description The settings of the Transfer Associated Resources feature.
     *
     * @var associatedTransferSetting
     */
    public $associatedTransferSetting;

    /**
     * @description The request ID.
     *
     * @example 7556FD65-45D2-5C45-9FC9-A7DE831C775C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'associatedTransferSetting' => 'AssociatedTransferSetting',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedTransferSetting) {
            $res['AssociatedTransferSetting'] = null !== $this->associatedTransferSetting ? $this->associatedTransferSetting->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssociatedTransferSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedTransferSetting'])) {
            $model->associatedTransferSetting = associatedTransferSetting::fromMap($map['AssociatedTransferSetting']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
