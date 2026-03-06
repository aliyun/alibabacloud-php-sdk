<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaNodeStatistics extends Model
{
    /**
     * @var int
     */
    public $actualMinHyperNodeNum;

    /**
     * @var int
     */
    public $actualMinNodeNum;

    /**
     * @var AllocatedHyperNodeDetail[]
     */
    public $allocatedHyperNodeDetails;

    /**
     * @var int
     */
    public $allocatedHyperNodeNum;

    /**
     * @var int
     */
    public $allocatedNodeNum;

    /**
     * @var int
     */
    public $emptyNodeNum;
    protected $_name = [
        'actualMinHyperNodeNum' => 'ActualMinHyperNodeNum',
        'actualMinNodeNum' => 'ActualMinNodeNum',
        'allocatedHyperNodeDetails' => 'AllocatedHyperNodeDetails',
        'allocatedHyperNodeNum' => 'AllocatedHyperNodeNum',
        'allocatedNodeNum' => 'AllocatedNodeNum',
        'emptyNodeNum' => 'EmptyNodeNum',
    ];

    public function validate()
    {
        if (\is_array($this->allocatedHyperNodeDetails)) {
            Model::validateArray($this->allocatedHyperNodeDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualMinHyperNodeNum) {
            $res['ActualMinHyperNodeNum'] = $this->actualMinHyperNodeNum;
        }

        if (null !== $this->actualMinNodeNum) {
            $res['ActualMinNodeNum'] = $this->actualMinNodeNum;
        }

        if (null !== $this->allocatedHyperNodeDetails) {
            if (\is_array($this->allocatedHyperNodeDetails)) {
                $res['AllocatedHyperNodeDetails'] = [];
                $n1 = 0;
                foreach ($this->allocatedHyperNodeDetails as $item1) {
                    $res['AllocatedHyperNodeDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allocatedHyperNodeNum) {
            $res['AllocatedHyperNodeNum'] = $this->allocatedHyperNodeNum;
        }

        if (null !== $this->allocatedNodeNum) {
            $res['AllocatedNodeNum'] = $this->allocatedNodeNum;
        }

        if (null !== $this->emptyNodeNum) {
            $res['EmptyNodeNum'] = $this->emptyNodeNum;
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
        if (isset($map['ActualMinHyperNodeNum'])) {
            $model->actualMinHyperNodeNum = $map['ActualMinHyperNodeNum'];
        }

        if (isset($map['ActualMinNodeNum'])) {
            $model->actualMinNodeNum = $map['ActualMinNodeNum'];
        }

        if (isset($map['AllocatedHyperNodeDetails'])) {
            if (!empty($map['AllocatedHyperNodeDetails'])) {
                $model->allocatedHyperNodeDetails = [];
                $n1 = 0;
                foreach ($map['AllocatedHyperNodeDetails'] as $item1) {
                    $model->allocatedHyperNodeDetails[$n1] = AllocatedHyperNodeDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AllocatedHyperNodeNum'])) {
            $model->allocatedHyperNodeNum = $map['AllocatedHyperNodeNum'];
        }

        if (isset($map['AllocatedNodeNum'])) {
            $model->allocatedNodeNum = $map['AllocatedNodeNum'];
        }

        if (isset($map['EmptyNodeNum'])) {
            $model->emptyNodeNum = $map['EmptyNodeNum'];
        }

        return $model;
    }
}
