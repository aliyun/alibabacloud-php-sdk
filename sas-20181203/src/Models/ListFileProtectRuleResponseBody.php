<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectRuleResponseBody\fileProtectList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectRuleResponseBody\pageInfo;

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
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileProtectList' => 'FileProtectList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fileProtectList)) {
            Model::validateArray($this->fileProtectList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileProtectList) {
            if (\is_array($this->fileProtectList)) {
                $res['FileProtectList'] = [];
                $n1 = 0;
                foreach ($this->fileProtectList as $item1) {
                    $res['FileProtectList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FileProtectList'])) {
            if (!empty($map['FileProtectList'])) {
                $model->fileProtectList = [];
                $n1 = 0;
                foreach ($map['FileProtectList'] as $item1) {
                    $model->fileProtectList[$n1] = fileProtectList::fromMap($item1);
                    ++$n1;
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
