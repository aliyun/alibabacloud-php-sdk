<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\UploadFileCheckResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $effectiveNumber;

    /**
     * @var string[]
     */
    public $resultList;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'effectiveNumber' => 'effectiveNumber',
        'resultList' => 'resultList',
        'totalNumber' => 'totalNumber',
    ];

    public function validate()
    {
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveNumber) {
            $res['effectiveNumber'] = $this->effectiveNumber;
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['resultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    $res['resultList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalNumber) {
            $res['totalNumber'] = $this->totalNumber;
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
        if (isset($map['effectiveNumber'])) {
            $model->effectiveNumber = $map['effectiveNumber'];
        }

        if (isset($map['resultList'])) {
            if (!empty($map['resultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['resultList'] as $item1) {
                    $model->resultList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['totalNumber'])) {
            $model->totalNumber = $map['totalNumber'];
        }

        return $model;
    }
}
