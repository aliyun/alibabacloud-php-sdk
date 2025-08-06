<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponseBody\orgUsesList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponseBody\outOrgUserList;

class QueryLiveWatchUserListResponseBody extends Model
{
    /**
     * @var orgUsesList[]
     */
    public $orgUsesList;

    /**
     * @var outOrgUserList[]
     */
    public $outOrgUserList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orgUsesList' => 'orgUsesList',
        'outOrgUserList' => 'outOrgUserList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->orgUsesList)) {
            Model::validateArray($this->orgUsesList);
        }
        if (\is_array($this->outOrgUserList)) {
            Model::validateArray($this->outOrgUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgUsesList) {
            if (\is_array($this->orgUsesList)) {
                $res['orgUsesList'] = [];
                $n1 = 0;
                foreach ($this->orgUsesList as $item1) {
                    $res['orgUsesList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outOrgUserList) {
            if (\is_array($this->outOrgUserList)) {
                $res['outOrgUserList'] = [];
                $n1 = 0;
                foreach ($this->outOrgUserList as $item1) {
                    $res['outOrgUserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['orgUsesList'])) {
            if (!empty($map['orgUsesList'])) {
                $model->orgUsesList = [];
                $n1 = 0;
                foreach ($map['orgUsesList'] as $item1) {
                    $model->orgUsesList[$n1] = orgUsesList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['outOrgUserList'])) {
            if (!empty($map['outOrgUserList'])) {
                $model->outOrgUserList = [];
                $n1 = 0;
                foreach ($map['outOrgUserList'] as $item1) {
                    $model->outOrgUserList[$n1] = outOrgUserList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
