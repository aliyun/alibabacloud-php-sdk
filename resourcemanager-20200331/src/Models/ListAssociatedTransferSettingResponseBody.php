<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody\associatedTransferSetting;

class ListAssociatedTransferSettingResponseBody extends Model
{
    /**
     * @var associatedTransferSetting
     */
    public $associatedTransferSetting;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'associatedTransferSetting' => 'AssociatedTransferSetting',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->associatedTransferSetting) {
            $this->associatedTransferSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedTransferSetting) {
            $res['AssociatedTransferSetting'] = null !== $this->associatedTransferSetting ? $this->associatedTransferSetting->toArray($noStream) : $this->associatedTransferSetting;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
