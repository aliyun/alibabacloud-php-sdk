<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupportModelsResponseBody;

use AlibabaCloud\Dara\Model;

class modelNames extends Model
{
    /**
     * @var string[]
     */
    public $modelNames;
    protected $_name = [
        'modelNames' => 'modelNames',
    ];

    public function validate()
    {
        if (\is_array($this->modelNames)) {
            Model::validateArray($this->modelNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelNames) {
            if (\is_array($this->modelNames)) {
                $res['modelNames'] = [];
                $n1 = 0;
                foreach ($this->modelNames as $item1) {
                    $res['modelNames'][$n1] = $item1;
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
        if (isset($map['modelNames'])) {
            if (!empty($map['modelNames'])) {
                $model->modelNames = [];
                $n1 = 0;
                foreach ($map['modelNames'] as $item1) {
                    $model->modelNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
