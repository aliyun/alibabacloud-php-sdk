<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaResponseBody\criteriaList;

class DescribeCriteriaResponseBody extends Model
{
    /**
     * @var criteriaList[]
     */
    public $criteriaList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'criteriaList' => 'CriteriaList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->criteriaList)) {
            Model::validateArray($this->criteriaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteriaList) {
            if (\is_array($this->criteriaList)) {
                $res['CriteriaList'] = [];
                $n1                  = 0;
                foreach ($this->criteriaList as $item1) {
                    $res['CriteriaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CriteriaList'])) {
            if (!empty($map['CriteriaList'])) {
                $model->criteriaList = [];
                $n1                  = 0;
                foreach ($map['CriteriaList'] as $item1) {
                    $model->criteriaList[$n1++] = criteriaList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
