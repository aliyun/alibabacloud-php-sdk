<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands\keyPoints;

class hands extends Model
{
    /**
     * @var float
     */
    public $confident;

    /**
     * @var keyPoints[]
     */
    public $keyPoints;
    protected $_name = [
        'confident' => 'Confident',
        'keyPoints' => 'KeyPoints',
    ];

    public function validate()
    {
        if (\is_array($this->keyPoints)) {
            Model::validateArray($this->keyPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confident) {
            $res['Confident'] = $this->confident;
        }

        if (null !== $this->keyPoints) {
            if (\is_array($this->keyPoints)) {
                $res['KeyPoints'] = [];
                $n1 = 0;
                foreach ($this->keyPoints as $item1) {
                    $res['KeyPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Confident'])) {
            $model->confident = $map['Confident'];
        }

        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n1 = 0;
                foreach ($map['KeyPoints'] as $item1) {
                    $model->keyPoints[$n1] = keyPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
