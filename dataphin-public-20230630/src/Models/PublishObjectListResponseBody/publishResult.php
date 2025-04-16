<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishObjectListResponseBody;

use AlibabaCloud\Dara\Model;

class publishResult extends Model
{
    /**
     * @var int[]
     */
    public $submitIdList;
    protected $_name = [
        'submitIdList' => 'SubmitIdList',
    ];

    public function validate()
    {
        if (\is_array($this->submitIdList)) {
            Model::validateArray($this->submitIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->submitIdList) {
            if (\is_array($this->submitIdList)) {
                $res['SubmitIdList'] = [];
                $n1 = 0;
                foreach ($this->submitIdList as $item1) {
                    $res['SubmitIdList'][$n1++] = $item1;
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
        if (isset($map['SubmitIdList'])) {
            if (!empty($map['SubmitIdList'])) {
                $model->submitIdList = [];
                $n1 = 0;
                foreach ($map['SubmitIdList'] as $item1) {
                    $model->submitIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
