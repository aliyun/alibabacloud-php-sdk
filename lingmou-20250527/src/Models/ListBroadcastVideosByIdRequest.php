<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class ListBroadcastVideosByIdRequest extends Model
{
    /**
     * @var string[]
     */
    public $videoIds;
    protected $_name = [
        'videoIds' => 'videoIds',
    ];

    public function validate()
    {
        if (\is_array($this->videoIds)) {
            Model::validateArray($this->videoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoIds) {
            if (\is_array($this->videoIds)) {
                $res['videoIds'] = [];
                $n1 = 0;
                foreach ($this->videoIds as $item1) {
                    $res['videoIds'][$n1] = $item1;
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
        if (isset($map['videoIds'])) {
            if (!empty($map['videoIds'])) {
                $model->videoIds = [];
                $n1 = 0;
                foreach ($map['videoIds'] as $item1) {
                    $model->videoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
