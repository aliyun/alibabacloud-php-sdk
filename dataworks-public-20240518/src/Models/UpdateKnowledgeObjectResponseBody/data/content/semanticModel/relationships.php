<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectResponseBody\data\content\semanticModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectResponseBody\data\content\semanticModel\relationships\joinKeys;

class relationships extends Model
{
    /**
     * @var string
     */
    public $fromDataset;

    /**
     * @var joinKeys[]
     */
    public $joinKeys;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $toDataset;
    protected $_name = [
        'fromDataset' => 'FromDataset',
        'joinKeys' => 'JoinKeys',
        'name' => 'Name',
        'toDataset' => 'ToDataset',
    ];

    public function validate()
    {
        if (\is_array($this->joinKeys)) {
            Model::validateArray($this->joinKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromDataset) {
            $res['FromDataset'] = $this->fromDataset;
        }

        if (null !== $this->joinKeys) {
            if (\is_array($this->joinKeys)) {
                $res['JoinKeys'] = [];
                $n1 = 0;
                foreach ($this->joinKeys as $item1) {
                    $res['JoinKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->toDataset) {
            $res['ToDataset'] = $this->toDataset;
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
        if (isset($map['FromDataset'])) {
            $model->fromDataset = $map['FromDataset'];
        }

        if (isset($map['JoinKeys'])) {
            if (!empty($map['JoinKeys'])) {
                $model->joinKeys = [];
                $n1 = 0;
                foreach ($map['JoinKeys'] as $item1) {
                    $model->joinKeys[$n1] = joinKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ToDataset'])) {
            $model->toDataset = $map['ToDataset'];
        }

        return $model;
    }
}
