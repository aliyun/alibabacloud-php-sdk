<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DivisionPageResult extends Model
{
    /**
     * @var Division[]
     */
    public $divisionList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'divisionList' => 'divisionList',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->divisionList)) {
            Model::validateArray($this->divisionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->divisionList) {
            if (\is_array($this->divisionList)) {
                $res['divisionList'] = [];
                $n1                  = 0;
                foreach ($this->divisionList as $item1) {
                    $res['divisionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['divisionList'])) {
            if (!empty($map['divisionList'])) {
                $model->divisionList = [];
                $n1                  = 0;
                foreach ($map['divisionList'] as $item1) {
                    $model->divisionList[$n1++] = Division::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
