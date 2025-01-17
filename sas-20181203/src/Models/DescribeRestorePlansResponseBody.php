<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody\restorePlans;

class DescribeRestorePlansResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var restorePlans[]
     */
    public $restorePlans;
    protected $_name = [
        'pageInfo'     => 'PageInfo',
        'requestId'    => 'RequestId',
        'restorePlans' => 'RestorePlans',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->restorePlans)) {
            Model::validateArray($this->restorePlans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restorePlans) {
            if (\is_array($this->restorePlans)) {
                $res['RestorePlans'] = [];
                $n1                  = 0;
                foreach ($this->restorePlans as $item1) {
                    $res['RestorePlans'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RestorePlans'])) {
            if (!empty($map['RestorePlans'])) {
                $model->restorePlans = [];
                $n1                  = 0;
                foreach ($map['RestorePlans'] as $item1) {
                    $model->restorePlans[$n1++] = restorePlans::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
