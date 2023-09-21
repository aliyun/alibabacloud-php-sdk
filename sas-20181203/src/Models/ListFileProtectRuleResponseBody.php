<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectRuleResponseBody\fileProtectList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectRuleResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListFileProtectRuleResponseBody extends Model
{
    /**
     * @var fileProtectList[]
     */
    public $fileProtectList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example FBBEB173-1F43-505F-A876-C03ECDF6CE4C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileProtectList' => 'FileProtectList',
        'pageInfo'        => 'PageInfo',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileProtectList) {
            $res['FileProtectList'] = [];
            if (null !== $this->fileProtectList && \is_array($this->fileProtectList)) {
                $n = 0;
                foreach ($this->fileProtectList as $item) {
                    $res['FileProtectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileProtectRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileProtectList'])) {
            if (!empty($map['FileProtectList'])) {
                $model->fileProtectList = [];
                $n                      = 0;
                foreach ($map['FileProtectList'] as $item) {
                    $model->fileProtectList[$n++] = null !== $item ? fileProtectList::fromMap($item) : $item;
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
