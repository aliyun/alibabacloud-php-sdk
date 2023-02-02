<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList;
use AlibabaCloud\Tea\Model;

class ListInstalledSoftwareResponseBody extends Model
{
    /**
     * @example DDCA0E7B-03E7-430D-810C-0D508539****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var softwareList
     */
    public $softwareList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'softwareList' => 'SoftwareList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->softwareList) {
            $res['SoftwareList'] = null !== $this->softwareList ? $this->softwareList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstalledSoftwareResponseBody
     */
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
