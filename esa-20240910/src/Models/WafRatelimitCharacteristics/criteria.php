<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRatelimitCharacteristics;

use AlibabaCloud\Dara\Model;

class criteria extends Model
{
    /**
     * @var criteria\criteria[]
     */
    public $criteria;

    /**
     * @var string
     */
    public $logic;

    /**
     * @var string
     */
    public $matchType;
    protected $_name = [
        'criteria' => 'Criteria',
        'logic' => 'Logic',
        'matchType' => 'MatchType',
    ];

    public function validate()
    {
        if (\is_array($this->criteria)) {
            Model::validateArray($this->criteria);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            if (\is_array($this->criteria)) {
                $res['Criteria'] = [];
                $n1 = 0;
                foreach ($this->criteria as $item1) {
                    $res['Criteria'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
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
        if (isset($map['Criteria'])) {
            if (!empty($map['Criteria'])) {
                $model->criteria = [];
                $n1 = 0;
                foreach ($map['Criteria'] as $item1) {
                    $model->criteria[$n1] = criteria\criteria::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        return $model;
    }
}
