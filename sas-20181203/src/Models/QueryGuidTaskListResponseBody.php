<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody\guideTaskConfigList;

class QueryGuidTaskListResponseBody extends Model
{
    /**
     * @var guideTaskConfigList[]
     */
    public $guideTaskConfigList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'guideTaskConfigList' => 'GuideTaskConfigList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->guideTaskConfigList)) {
            Model::validateArray($this->guideTaskConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guideTaskConfigList) {
            if (\is_array($this->guideTaskConfigList)) {
                $res['GuideTaskConfigList'] = [];
                $n1                         = 0;
                foreach ($this->guideTaskConfigList as $item1) {
                    $res['GuideTaskConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['GuideTaskConfigList'])) {
            if (!empty($map['GuideTaskConfigList'])) {
                $model->guideTaskConfigList = [];
                $n1                         = 0;
                foreach ($map['GuideTaskConfigList'] as $item1) {
                    $model->guideTaskConfigList[$n1++] = guideTaskConfigList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
