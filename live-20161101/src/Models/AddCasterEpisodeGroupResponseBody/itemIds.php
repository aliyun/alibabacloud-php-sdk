<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupResponseBody;

use AlibabaCloud\Dara\Model;

class itemIds extends Model
{
    /**
     * @var string[]
     */
    public $itemId;
    protected $_name = [
        'itemId' => 'ItemId',
    ];

    public function validate()
    {
        if (\is_array($this->itemId)) {
            Model::validateArray($this->itemId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemId) {
            if (\is_array($this->itemId)) {
                $res['ItemId'] = [];
                $n1 = 0;
                foreach ($this->itemId as $item1) {
                    $res['ItemId'][$n1] = $item1;
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
        if (isset($map['ItemId'])) {
            if (!empty($map['ItemId'])) {
                $model->itemId = [];
                $n1 = 0;
                foreach ($map['ItemId'] as $item1) {
                    $model->itemId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
