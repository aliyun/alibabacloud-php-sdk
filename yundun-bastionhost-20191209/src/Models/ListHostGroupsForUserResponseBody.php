<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserResponseBody\hostGroups;

class ListHostGroupsForUserResponseBody extends Model
{
    /**
     * @var hostGroups[]
     */
    public $hostGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostGroups' => 'HostGroups',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->hostGroups)) {
            Model::validateArray($this->hostGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostGroups) {
            if (\is_array($this->hostGroups)) {
                $res['HostGroups'] = [];
                $n1 = 0;
                foreach ($this->hostGroups as $item1) {
                    $res['HostGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['HostGroups'])) {
            if (!empty($map['HostGroups'])) {
                $model->hostGroups = [];
                $n1 = 0;
                foreach ($map['HostGroups'] as $item1) {
                    $model->hostGroups[$n1] = hostGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
