<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleApplicationResponseBody\containerWebDefenseAppList;
use AlibabaCloud\Tea\Model;

class GetSasContainerWebDefenseRuleApplicationResponseBody extends Model
{
    /**
     * @description The applications.
     *
     * @var containerWebDefenseAppList[]
     */
    public $containerWebDefenseAppList;

    /**
     * @description The request ID.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerWebDefenseAppList' => 'ContainerWebDefenseAppList',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerWebDefenseAppList) {
            $res['ContainerWebDefenseAppList'] = [];
            if (null !== $this->containerWebDefenseAppList && \is_array($this->containerWebDefenseAppList)) {
                $n = 0;
                foreach ($this->containerWebDefenseAppList as $item) {
                    $res['ContainerWebDefenseAppList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSasContainerWebDefenseRuleApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerWebDefenseAppList'])) {
            if (!empty($map['ContainerWebDefenseAppList'])) {
                $model->containerWebDefenseAppList = [];
                $n                                 = 0;
                foreach ($map['ContainerWebDefenseAppList'] as $item) {
                    $model->containerWebDefenseAppList[$n++] = null !== $item ? containerWebDefenseAppList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
