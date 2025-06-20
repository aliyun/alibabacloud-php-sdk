<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody\data\checkDetailList\blockRule;

use AlibabaCloud\Dara\Model;

class scopeNodeList extends Model
{
    /**
     * @var string
     */
    public $leafLevel;

    /**
     * @var string
     */
    public $level1;

    /**
     * @var string
     */
    public $level2;

    /**
     * @var string
     */
    public $level3;

    /**
     * @var string
     */
    public $level4;

    /**
     * @var string
     */
    public $level5;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'leafLevel' => 'LeafLevel',
        'level1' => 'Level1',
        'level2' => 'Level2',
        'level3' => 'Level3',
        'level4' => 'Level4',
        'level5' => 'Level5',
        'path' => 'Path',
        'ruleId' => 'RuleId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->leafLevel) {
            $res['LeafLevel'] = $this->leafLevel;
        }

        if (null !== $this->level1) {
            $res['Level1'] = $this->level1;
        }

        if (null !== $this->level2) {
            $res['Level2'] = $this->level2;
        }

        if (null !== $this->level3) {
            $res['Level3'] = $this->level3;
        }

        if (null !== $this->level4) {
            $res['Level4'] = $this->level4;
        }

        if (null !== $this->level5) {
            $res['Level5'] = $this->level5;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['LeafLevel'])) {
            $model->leafLevel = $map['LeafLevel'];
        }

        if (isset($map['Level1'])) {
            $model->level1 = $map['Level1'];
        }

        if (isset($map['Level2'])) {
            $model->level2 = $map['Level2'];
        }

        if (isset($map['Level3'])) {
            $model->level3 = $map['Level3'];
        }

        if (isset($map['Level4'])) {
            $model->level4 = $map['Level4'];
        }

        if (isset($map['Level5'])) {
            $model->level5 = $map['Level5'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
