<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout;

use AlibabaCloud\Dara\Model;

class blendList extends Model
{
    /**
     * @var string[]
     */
    public $locationId;
    protected $_name = [
        'locationId' => 'LocationId',
    ];

    public function validate()
    {
        if (\is_array($this->locationId)) {
            Model::validateArray($this->locationId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locationId) {
            if (\is_array($this->locationId)) {
                $res['LocationId'] = [];
                $n1 = 0;
                foreach ($this->locationId as $item1) {
                    $res['LocationId'][$n1] = $item1;
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
        if (isset($map['LocationId'])) {
            if (!empty($map['LocationId'])) {
                $model->locationId = [];
                $n1 = 0;
                foreach ($map['LocationId'] as $item1) {
                    $model->locationId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
