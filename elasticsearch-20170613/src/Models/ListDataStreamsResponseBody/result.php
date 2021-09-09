<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody\result\indices;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $totalStorageSize;

    /**
     * @var string
     */
    public $indexTemplateName;

    /**
     * @var string
     */
    public $ilmPolicyName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $health;

    /**
     * @var int
     */
    public $managedStorageSize;

    /**
     * @var indices[]
     */
    public $indices;
    protected $_name = [
        'totalStorageSize'   => 'totalStorageSize',
        'indexTemplateName'  => 'indexTemplateName',
        'ilmPolicyName'      => 'ilmPolicyName',
        'name'               => 'name',
        'health'             => 'health',
        'managedStorageSize' => 'managedStorageSize',
        'indices'            => 'indices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalStorageSize) {
            $res['totalStorageSize'] = $this->totalStorageSize;
        }
        if (null !== $this->indexTemplateName) {
            $res['indexTemplateName'] = $this->indexTemplateName;
        }
        if (null !== $this->ilmPolicyName) {
            $res['ilmPolicyName'] = $this->ilmPolicyName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->managedStorageSize) {
            $res['managedStorageSize'] = $this->managedStorageSize;
        }
        if (null !== $this->indices) {
            $res['indices'] = [];
            if (null !== $this->indices && \is_array($this->indices)) {
                $n = 0;
                foreach ($this->indices as $item) {
                    $res['indices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['totalStorageSize'])) {
            $model->totalStorageSize = $map['totalStorageSize'];
        }
        if (isset($map['indexTemplateName'])) {
            $model->indexTemplateName = $map['indexTemplateName'];
        }
        if (isset($map['ilmPolicyName'])) {
            $model->ilmPolicyName = $map['ilmPolicyName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['managedStorageSize'])) {
            $model->managedStorageSize = $map['managedStorageSize'];
        }
        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = [];
                $n              = 0;
                foreach ($map['indices'] as $item) {
                    $model->indices[$n++] = null !== $item ? indices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
