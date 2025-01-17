<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchIndexJobRerunResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $mediaIdsNoExist;
    protected $_name = [
        'mediaIdsNoExist' => 'MediaIdsNoExist',
    ];

    public function validate()
    {
        if (\is_array($this->mediaIdsNoExist)) {
            Model::validateArray($this->mediaIdsNoExist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaIdsNoExist) {
            if (\is_array($this->mediaIdsNoExist)) {
                $res['MediaIdsNoExist'] = [];
                $n1                     = 0;
                foreach ($this->mediaIdsNoExist as $item1) {
                    $res['MediaIdsNoExist'][$n1++] = $item1;
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
        if (isset($map['MediaIdsNoExist'])) {
            if (!empty($map['MediaIdsNoExist'])) {
                $model->mediaIdsNoExist = [];
                $n1                     = 0;
                foreach ($map['MediaIdsNoExist'] as $item1) {
                    $model->mediaIdsNoExist[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
