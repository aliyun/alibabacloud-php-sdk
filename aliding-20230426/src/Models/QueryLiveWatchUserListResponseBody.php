<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponseBody\orgUsesList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponseBody\outOrgUserList;
use AlibabaCloud\Tea\Model;

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
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orgUsesList'    => 'orgUsesList',
        'outOrgUserList' => 'outOrgUserList',
        'requestId'      => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgUsesList) {
            $res['orgUsesList'] = [];
            if (null !== $this->orgUsesList && \is_array($this->orgUsesList)) {
                $n = 0;
                foreach ($this->orgUsesList as $item) {
                    $res['orgUsesList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outOrgUserList) {
            $res['outOrgUserList'] = [];
            if (null !== $this->outOrgUserList && \is_array($this->outOrgUserList)) {
                $n = 0;
                foreach ($this->outOrgUserList as $item) {
                    $res['outOrgUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLiveWatchUserListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orgUsesList'])) {
            if (!empty($map['orgUsesList'])) {
                $model->orgUsesList = [];
                $n                  = 0;
                foreach ($map['orgUsesList'] as $item) {
                    $model->orgUsesList[$n++] = null !== $item ? orgUsesList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['outOrgUserList'])) {
            if (!empty($map['outOrgUserList'])) {
                $model->outOrgUserList = [];
                $n                     = 0;
                foreach ($map['outOrgUserList'] as $item) {
                    $model->outOrgUserList[$n++] = null !== $item ? outOrgUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
