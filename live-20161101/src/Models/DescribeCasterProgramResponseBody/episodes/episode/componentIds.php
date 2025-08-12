<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes\episode;

use AlibabaCloud\Dara\Model;

class componentIds extends Model
{
    /**
     * @var string[]
     */
    public $componentId;
    protected $_name = [
        'componentId' => 'ComponentId',
    ];

    public function validate()
    {
        if (\is_array($this->componentId)) {
            Model::validateArray($this->componentId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            if (\is_array($this->componentId)) {
                $res['ComponentId'] = [];
                $n1 = 0;
                foreach ($this->componentId as $item1) {
                    $res['ComponentId'][$n1] = $item1;
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
        if (isset($map['ComponentId'])) {
            if (!empty($map['ComponentId'])) {
                $model->componentId = [];
                $n1 = 0;
                foreach ($map['ComponentId'] as $item1) {
                    $model->componentId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
