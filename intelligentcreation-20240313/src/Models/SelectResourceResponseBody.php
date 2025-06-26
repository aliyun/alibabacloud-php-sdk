<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceResponseBody\resourceInfoList;

class SelectResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceInfoList[]
     */
    public $resourceInfoList;
    protected $_name = [
        'aliyunUid' => 'aliyunUid',
        'requestId' => 'requestId',
        'resourceInfoList' => 'resourceInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceInfoList)) {
            Model::validateArray($this->resourceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['aliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceInfoList) {
            if (\is_array($this->resourceInfoList)) {
                $res['resourceInfoList'] = [];
                $n1 = 0;
                foreach ($this->resourceInfoList as $item1) {
                    $res['resourceInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['aliyunUid'])) {
            $model->aliyunUid = $map['aliyunUid'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceInfoList'])) {
            if (!empty($map['resourceInfoList'])) {
                $model->resourceInfoList = [];
                $n1 = 0;
                foreach ($map['resourceInfoList'] as $item1) {
                    $model->resourceInfoList[$n1] = resourceInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
