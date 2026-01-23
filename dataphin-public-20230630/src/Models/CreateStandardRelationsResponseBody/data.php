<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardRelationsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $notExistStandardIdList;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'notExistStandardIdList' => 'NotExistStandardIdList',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        if (\is_array($this->notExistStandardIdList)) {
            Model::validateArray($this->notExistStandardIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notExistStandardIdList) {
            if (\is_array($this->notExistStandardIdList)) {
                $res['NotExistStandardIdList'] = [];
                $n1 = 0;
                foreach ($this->notExistStandardIdList as $item1) {
                    $res['NotExistStandardIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['NotExistStandardIdList'])) {
            if (!empty($map['NotExistStandardIdList'])) {
                $model->notExistStandardIdList = [];
                $n1 = 0;
                foreach ($map['NotExistStandardIdList'] as $item1) {
                    $model->notExistStandardIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
