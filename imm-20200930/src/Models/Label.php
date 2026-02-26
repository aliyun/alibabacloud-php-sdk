<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Label extends Model
{
    /**
     * @var float
     */
    public $centricScore;

    /**
     * @var Clip[]
     */
    public $clips;

    /**
     * @var string
     */
    public $labelAlias;

    /**
     * @var float
     */
    public $labelConfidence;

    /**
     * @var int
     */
    public $labelLevel;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $parentLabelName;
    protected $_name = [
        'centricScore' => 'CentricScore',
        'clips' => 'Clips',
        'labelAlias' => 'LabelAlias',
        'labelConfidence' => 'LabelConfidence',
        'labelLevel' => 'LabelLevel',
        'labelName' => 'LabelName',
        'language' => 'Language',
        'parentLabelName' => 'ParentLabelName',
    ];

    public function validate()
    {
        if (\is_array($this->clips)) {
            Model::validateArray($this->clips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->centricScore) {
            $res['CentricScore'] = $this->centricScore;
        }

        if (null !== $this->clips) {
            if (\is_array($this->clips)) {
                $res['Clips'] = [];
                $n1 = 0;
                foreach ($this->clips as $item1) {
                    $res['Clips'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labelAlias) {
            $res['LabelAlias'] = $this->labelAlias;
        }

        if (null !== $this->labelConfidence) {
            $res['LabelConfidence'] = $this->labelConfidence;
        }

        if (null !== $this->labelLevel) {
            $res['LabelLevel'] = $this->labelLevel;
        }

        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->parentLabelName) {
            $res['ParentLabelName'] = $this->parentLabelName;
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
        if (isset($map['CentricScore'])) {
            $model->centricScore = $map['CentricScore'];
        }

        if (isset($map['Clips'])) {
            if (!empty($map['Clips'])) {
                $model->clips = [];
                $n1 = 0;
                foreach ($map['Clips'] as $item1) {
                    $model->clips[$n1] = Clip::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LabelAlias'])) {
            $model->labelAlias = $map['LabelAlias'];
        }

        if (isset($map['LabelConfidence'])) {
            $model->labelConfidence = $map['LabelConfidence'];
        }

        if (isset($map['LabelLevel'])) {
            $model->labelLevel = $map['LabelLevel'];
        }

        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ParentLabelName'])) {
            $model->parentLabelName = $map['ParentLabelName'];
        }

        return $model;
    }
}
