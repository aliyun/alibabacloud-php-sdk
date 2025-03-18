<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig;

use AlibabaCloud\Tea\Model;

class jqNodes extends Model
{
    /**
     * @var jqNodes\jqNodes[]
     */
    public $jqNodes;

    /**
     * @example 节点key
     *
     * @var string
     */
    public $key;

    /**
     * @example 节点路径
     *
     * @var string
     */
    public $path;

    /**
     * @example 节点数据类型：string number list object base
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'jqNodes' => 'JqNodes',
        'key' => 'Key',
        'path' => 'Path',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jqNodes) {
            $res['JqNodes'] = [];
            if (null !== $this->jqNodes && \is_array($this->jqNodes)) {
                $n = 0;
                foreach ($this->jqNodes as $item) {
                    $res['JqNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jqNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JqNodes'])) {
            if (!empty($map['JqNodes'])) {
                $model->jqNodes = [];
                $n = 0;
                foreach ($map['JqNodes'] as $item) {
                    $model->jqNodes[$n++] = null !== $item ? jqNodes\jqNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
