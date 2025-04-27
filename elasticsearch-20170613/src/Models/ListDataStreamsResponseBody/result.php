<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody\result\indices;

class result extends Model
{
    /**
     * @var string
     */
    public $health;

    /**
     * @var string
     */
    public $ilmPolicyName;

    /**
     * @var string
     */
    public $indexTemplateName;

    /**
     * @var indices[]
     */
    public $indices;

    /**
     * @var int
     */
    public $managedStorageSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $totalStorageSize;
    protected $_name = [
        'health' => 'health',
        'ilmPolicyName' => 'ilmPolicyName',
        'indexTemplateName' => 'indexTemplateName',
        'indices' => 'indices',
        'managedStorageSize' => 'managedStorageSize',
        'name' => 'name',
        'totalStorageSize' => 'totalStorageSize',
    ];

    public function validate()
    {
        if (\is_array($this->indices)) {
            Model::validateArray($this->indices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }

        if (null !== $this->ilmPolicyName) {
            $res['ilmPolicyName'] = $this->ilmPolicyName;
        }

        if (null !== $this->indexTemplateName) {
            $res['indexTemplateName'] = $this->indexTemplateName;
        }

        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['indices'] = [];
                $n1 = 0;
                foreach ($this->indices as $item1) {
                    $res['indices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->managedStorageSize) {
            $res['managedStorageSize'] = $this->managedStorageSize;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->totalStorageSize) {
            $res['totalStorageSize'] = $this->totalStorageSize;
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
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }

        if (isset($map['ilmPolicyName'])) {
            $model->ilmPolicyName = $map['ilmPolicyName'];
        }

        if (isset($map['indexTemplateName'])) {
            $model->indexTemplateName = $map['indexTemplateName'];
        }

        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = [];
                $n1 = 0;
                foreach ($map['indices'] as $item1) {
                    $model->indices[$n1++] = indices::fromMap($item1);
                }
            }
        }

        if (isset($map['managedStorageSize'])) {
            $model->managedStorageSize = $map['managedStorageSize'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['totalStorageSize'])) {
            $model->totalStorageSize = $map['totalStorageSize'];
        }

        return $model;
    }
}
