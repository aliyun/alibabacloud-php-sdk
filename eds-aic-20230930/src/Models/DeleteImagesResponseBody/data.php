<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteImagesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failDeleteImageIds;

    /**
     * @var string[]
     */
    public $successDeleteImageIds;
    protected $_name = [
        'failDeleteImageIds' => 'FailDeleteImageIds',
        'successDeleteImageIds' => 'SuccessDeleteImageIds',
    ];

    public function validate()
    {
        if (\is_array($this->failDeleteImageIds)) {
            Model::validateArray($this->failDeleteImageIds);
        }
        if (\is_array($this->successDeleteImageIds)) {
            Model::validateArray($this->successDeleteImageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failDeleteImageIds) {
            if (\is_array($this->failDeleteImageIds)) {
                $res['FailDeleteImageIds'] = [];
                $n1 = 0;
                foreach ($this->failDeleteImageIds as $item1) {
                    $res['FailDeleteImageIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->successDeleteImageIds) {
            if (\is_array($this->successDeleteImageIds)) {
                $res['SuccessDeleteImageIds'] = [];
                $n1 = 0;
                foreach ($this->successDeleteImageIds as $item1) {
                    $res['SuccessDeleteImageIds'][$n1++] = $item1;
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
        if (isset($map['FailDeleteImageIds'])) {
            if (!empty($map['FailDeleteImageIds'])) {
                $model->failDeleteImageIds = [];
                $n1 = 0;
                foreach ($map['FailDeleteImageIds'] as $item1) {
                    $model->failDeleteImageIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SuccessDeleteImageIds'])) {
            if (!empty($map['SuccessDeleteImageIds'])) {
                $model->successDeleteImageIds = [];
                $n1 = 0;
                foreach ($map['SuccessDeleteImageIds'] as $item1) {
                    $model->successDeleteImageIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
