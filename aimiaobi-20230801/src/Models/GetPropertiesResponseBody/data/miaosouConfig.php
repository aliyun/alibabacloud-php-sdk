<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\miaosouConfig\modelInfos;

class miaosouConfig extends Model
{
    /**
     * @var int
     */
    public $maxDocSize;

    /**
     * @var modelInfos[]
     */
    public $modelInfos;

    /**
     * @var int
     */
    public $useDocSize;
    protected $_name = [
        'maxDocSize' => 'MaxDocSize',
        'modelInfos' => 'ModelInfos',
        'useDocSize' => 'UseDocSize',
    ];

    public function validate()
    {
        if (\is_array($this->modelInfos)) {
            Model::validateArray($this->modelInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDocSize) {
            $res['MaxDocSize'] = $this->maxDocSize;
        }

        if (null !== $this->modelInfos) {
            if (\is_array($this->modelInfos)) {
                $res['ModelInfos'] = [];
                $n1 = 0;
                foreach ($this->modelInfos as $item1) {
                    $res['ModelInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->useDocSize) {
            $res['UseDocSize'] = $this->useDocSize;
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
        if (isset($map['MaxDocSize'])) {
            $model->maxDocSize = $map['MaxDocSize'];
        }

        if (isset($map['ModelInfos'])) {
            if (!empty($map['ModelInfos'])) {
                $model->modelInfos = [];
                $n1 = 0;
                foreach ($map['ModelInfos'] as $item1) {
                    $model->modelInfos[$n1++] = modelInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['UseDocSize'])) {
            $model->useDocSize = $map['UseDocSize'];
        }

        return $model;
    }
}
