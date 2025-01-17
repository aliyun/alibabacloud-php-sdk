<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\connects;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\pageInfo;

class FindContainerNetworkConnectResponseBody extends Model
{
    /**
     * @var connects[]
     */
    public $connects;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connects'  => 'Connects',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->connects)) {
            Model::validateArray($this->connects);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connects) {
            if (\is_array($this->connects)) {
                $res['Connects'] = [];
                $n1              = 0;
                foreach ($this->connects as $item1) {
                    $res['Connects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['Connects'])) {
            if (!empty($map['Connects'])) {
                $model->connects = [];
                $n1              = 0;
                foreach ($map['Connects'] as $item1) {
                    $model->connects[$n1++] = connects::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
