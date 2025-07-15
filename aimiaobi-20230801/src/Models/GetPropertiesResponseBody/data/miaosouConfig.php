<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\miaosouConfig\modelInfos;
use AlibabaCloud\Tea\Model;

class miaosouConfig extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $maxDocSize;

    /**
     * @var modelInfos[]
     */
    public $modelInfos;

    /**
     * @example 1
     *
     * @var int
     */
    public $useDocSize;
    protected $_name = [
        'maxDocSize' => 'MaxDocSize',
        'modelInfos' => 'ModelInfos',
        'useDocSize' => 'UseDocSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxDocSize) {
            $res['MaxDocSize'] = $this->maxDocSize;
        }
        if (null !== $this->modelInfos) {
            $res['ModelInfos'] = [];
            if (null !== $this->modelInfos && \is_array($this->modelInfos)) {
                $n = 0;
                foreach ($this->modelInfos as $item) {
                    $res['ModelInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useDocSize) {
            $res['UseDocSize'] = $this->useDocSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return miaosouConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxDocSize'])) {
            $model->maxDocSize = $map['MaxDocSize'];
        }
        if (isset($map['ModelInfos'])) {
            if (!empty($map['ModelInfos'])) {
                $model->modelInfos = [];
                $n = 0;
                foreach ($map['ModelInfos'] as $item) {
                    $model->modelInfos[$n++] = null !== $item ? modelInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UseDocSize'])) {
            $model->useDocSize = $map['UseDocSize'];
        }

        return $model;
    }
}
