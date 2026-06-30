<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\tagCategoryResponse;

use AlibabaCloud\Dara\Model;

class tagCategoryVoList extends Model
{
    /**
     * @var string
     */
    public $dimension;

    /**
     * @var bool
     */
    public $isMatch;

    /**
     * @var string[]
     */
    public $originalUtterances;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string[]
     */
    public $resultLabels;
    protected $_name = [
        'dimension' => 'Dimension',
        'isMatch' => 'IsMatch',
        'originalUtterances' => 'OriginalUtterances',
        'remarks' => 'Remarks',
        'resultLabels' => 'ResultLabels',
    ];

    public function validate()
    {
        if (\is_array($this->originalUtterances)) {
            Model::validateArray($this->originalUtterances);
        }
        if (\is_array($this->resultLabels)) {
            Model::validateArray($this->resultLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->isMatch) {
            $res['IsMatch'] = $this->isMatch;
        }

        if (null !== $this->originalUtterances) {
            if (\is_array($this->originalUtterances)) {
                $res['OriginalUtterances'] = [];
                $n1 = 0;
                foreach ($this->originalUtterances as $item1) {
                    $res['OriginalUtterances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->resultLabels) {
            if (\is_array($this->resultLabels)) {
                $res['ResultLabels'] = [];
                $n1 = 0;
                foreach ($this->resultLabels as $item1) {
                    $res['ResultLabels'][$n1] = $item1;
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
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['IsMatch'])) {
            $model->isMatch = $map['IsMatch'];
        }

        if (isset($map['OriginalUtterances'])) {
            if (!empty($map['OriginalUtterances'])) {
                $model->originalUtterances = [];
                $n1 = 0;
                foreach ($map['OriginalUtterances'] as $item1) {
                    $model->originalUtterances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['ResultLabels'])) {
            if (!empty($map['ResultLabels'])) {
                $model->resultLabels = [];
                $n1 = 0;
                foreach ($map['ResultLabels'] as $item1) {
                    $model->resultLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
