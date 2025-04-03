<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig\jqNodes\jqNodes;

class jqNodes extends Model
{
    /**
     * @var jqNodes[]
     */
    public $jqNodes;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'jqNodes' => 'JqNodes',
        'key' => 'Key',
        'path' => 'Path',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->jqNodes)) {
            Model::validateArray($this->jqNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jqNodes) {
            if (\is_array($this->jqNodes)) {
                $res['JqNodes'] = [];
                $n1 = 0;
                foreach ($this->jqNodes as $item1) {
                    $res['JqNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JqNodes'])) {
            if (!empty($map['JqNodes'])) {
                $model->jqNodes = [];
                $n1 = 0;
                foreach ($map['JqNodes'] as $item1) {
                    $model->jqNodes[$n1++] = self::fromMap($item1);
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
