<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunScriptPlanningRequest extends Model
{
    /**
     * @example 故事尽可能狗血
     *
     * @var string
     */
    public $additionalNote;

    /**
     * @var bool
     */
    public $dialogueInScene;

    /**
     * @var bool
     */
    public $plotConflict;

    /**
     * @example 都市战神
     *
     * @var string
     */
    public $scriptName;

    /**
     * @example 3
     *
     * @var int
     */
    public $scriptShotCount;

    /**
     * @description This parameter is required.
     *
     * @example 在一个宁静的小镇上，每个家庭都在同一天收到一个神秘的、没有标记的包裹。
     *
     * @var string
     */
    public $scriptSummary;

    /**
     * @example 现代，都市，爱情，玄幻
     *
     * @var string
     */
    public $scriptTypeKeyword;
    protected $_name = [
        'additionalNote'    => 'additionalNote',
        'dialogueInScene'   => 'dialogueInScene',
        'plotConflict'      => 'plotConflict',
        'scriptName'        => 'scriptName',
        'scriptShotCount'   => 'scriptShotCount',
        'scriptSummary'     => 'scriptSummary',
        'scriptTypeKeyword' => 'scriptTypeKeyword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalNote) {
            $res['additionalNote'] = $this->additionalNote;
        }
        if (null !== $this->dialogueInScene) {
            $res['dialogueInScene'] = $this->dialogueInScene;
        }
        if (null !== $this->plotConflict) {
            $res['plotConflict'] = $this->plotConflict;
        }
        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptShotCount) {
            $res['scriptShotCount'] = $this->scriptShotCount;
        }
        if (null !== $this->scriptSummary) {
            $res['scriptSummary'] = $this->scriptSummary;
        }
        if (null !== $this->scriptTypeKeyword) {
            $res['scriptTypeKeyword'] = $this->scriptTypeKeyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunScriptPlanningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalNote'])) {
            $model->additionalNote = $map['additionalNote'];
        }
        if (isset($map['dialogueInScene'])) {
            $model->dialogueInScene = $map['dialogueInScene'];
        }
        if (isset($map['plotConflict'])) {
            $model->plotConflict = $map['plotConflict'];
        }
        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }
        if (isset($map['scriptShotCount'])) {
            $model->scriptShotCount = $map['scriptShotCount'];
        }
        if (isset($map['scriptSummary'])) {
            $model->scriptSummary = $map['scriptSummary'];
        }
        if (isset($map['scriptTypeKeyword'])) {
            $model->scriptTypeKeyword = $map['scriptTypeKeyword'];
        }

        return $model;
    }
}
