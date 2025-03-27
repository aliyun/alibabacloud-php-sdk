<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunScriptPlanningRequest extends Model
{
    /**
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
     * @var string
     */
    public $scriptName;

    /**
     * @var int
     */
    public $scriptShotCount;

    /**
     * @var string
     */
    public $scriptSummary;

    /**
     * @var string
     */
    public $scriptTypeKeyword;
    protected $_name = [
        'additionalNote' => 'additionalNote',
        'dialogueInScene' => 'dialogueInScene',
        'plotConflict' => 'plotConflict',
        'scriptName' => 'scriptName',
        'scriptShotCount' => 'scriptShotCount',
        'scriptSummary' => 'scriptSummary',
        'scriptTypeKeyword' => 'scriptTypeKeyword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
