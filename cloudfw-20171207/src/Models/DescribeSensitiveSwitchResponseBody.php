<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSensitiveSwitchResponseBody\userSensitiveDataSwitchList;

class DescribeSensitiveSwitchResponseBody extends Model
{
    /**
     * @var int
     */
    public $openCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var userSensitiveDataSwitchList[]
     */
    public $userSensitiveDataSwitchList;
    protected $_name = [
        'openCount' => 'OpenCount',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'userSensitiveDataSwitchList' => 'UserSensitiveDataSwitchList',
    ];

    public function validate()
    {
        if (\is_array($this->userSensitiveDataSwitchList)) {
            Model::validateArray($this->userSensitiveDataSwitchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openCount) {
            $res['OpenCount'] = $this->openCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userSensitiveDataSwitchList) {
            if (\is_array($this->userSensitiveDataSwitchList)) {
                $res['UserSensitiveDataSwitchList'] = [];
                $n1 = 0;
                foreach ($this->userSensitiveDataSwitchList as $item1) {
                    $res['UserSensitiveDataSwitchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['OpenCount'])) {
            $model->openCount = $map['OpenCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserSensitiveDataSwitchList'])) {
            if (!empty($map['UserSensitiveDataSwitchList'])) {
                $model->userSensitiveDataSwitchList = [];
                $n1 = 0;
                foreach ($map['UserSensitiveDataSwitchList'] as $item1) {
                    $model->userSensitiveDataSwitchList[$n1] = userSensitiveDataSwitchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
