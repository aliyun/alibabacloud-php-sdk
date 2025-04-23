<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList;

class ListInstalledSoftwareResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var softwareList
     */
    public $softwareList;
    protected $_name = [
        'requestId' => 'RequestId',
        'softwareList' => 'SoftwareList',
    ];

    public function validate()
    {
        if (null !== $this->softwareList) {
            $this->softwareList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->softwareList) {
            $res['SoftwareList'] = null !== $this->softwareList ? $this->softwareList->toArray($noStream) : $this->softwareList;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SoftwareList'])) {
            $model->softwareList = softwareList::fromMap($map['SoftwareList']);
        }

        return $model;
    }
}
