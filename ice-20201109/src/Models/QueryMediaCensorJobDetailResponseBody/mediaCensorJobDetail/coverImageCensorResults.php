<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\coverImageCensorResults\coverImageCensorResult;

class coverImageCensorResults extends Model
{
    /**
     * @var coverImageCensorResult[]
     */
    public $coverImageCensorResult;
    protected $_name = [
        'coverImageCensorResult' => 'CoverImageCensorResult',
    ];

    public function validate()
    {
        if (\is_array($this->coverImageCensorResult)) {
            Model::validateArray($this->coverImageCensorResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverImageCensorResult) {
            if (\is_array($this->coverImageCensorResult)) {
                $res['CoverImageCensorResult'] = [];
                $n1                            = 0;
                foreach ($this->coverImageCensorResult as $item1) {
                    $res['CoverImageCensorResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CoverImageCensorResult'])) {
            if (!empty($map['CoverImageCensorResult'])) {
                $model->coverImageCensorResult = [];
                $n1                            = 0;
                foreach ($map['CoverImageCensorResult'] as $item1) {
                    $model->coverImageCensorResult[$n1++] = coverImageCensorResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
