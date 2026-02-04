<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class ListBroadcastAudiosByIdRequest extends Model
{
    /**
     * @var string[]
     */
    public $audioIds;
    protected $_name = [
        'audioIds' => 'audioIds',
    ];

    public function validate()
    {
        if (\is_array($this->audioIds)) {
            Model::validateArray($this->audioIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioIds) {
            if (\is_array($this->audioIds)) {
                $res['audioIds'] = [];
                $n1 = 0;
                foreach ($this->audioIds as $item1) {
                    $res['audioIds'][$n1] = $item1;
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
        if (isset($map['audioIds'])) {
            if (!empty($map['audioIds'])) {
                $model->audioIds = [];
                $n1 = 0;
                foreach ($map['audioIds'] as $item1) {
                    $model->audioIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
