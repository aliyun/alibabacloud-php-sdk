<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList;
use AlibabaCloud\Tea\Model;

class ListInstalledSoftwareResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var softwareList[]
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
            $res['SoftwareList'] = [];
            if (null !== $this->softwareList && \is_array($this->softwareList)) {
                $n = 0;
                foreach ($this->softwareList as $item) {
                    $res['SoftwareList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['SoftwareList'])) {
                $model->softwareList = [];
                $n                   = 0;
                foreach ($map['SoftwareList'] as $item) {
                    $model->softwareList[$n++] = null !== $item ? softwareList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
