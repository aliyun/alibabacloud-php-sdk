<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\qualityCheckList\originDialogue;
use AlibabaCloud\Tea\Model;

class qualityCheckList extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $checkExplanation;

    /**
     * @example PASSED
     *
     * @var string
     */
    public $checkPassed;

    /**
     * @var string
     */
    public $checkProcess;

    /**
     * @example HIT
     *
     * @var string
     */
    public $checked;

    /**
     * @example 2024-05-23 14:57:50
     *
     * @var string
     */
    public $gmtEnd;

    /**
     * @example 2024-05-23 14:57:50
     *
     * @var string
     */
    public $gmtStart;

    /**
     * @example 0
     *
     * @var string
     */
    public $mode;

    /**
     * @var originDialogue[]
     */
    public $originDialogue;

    /**
     * @example warning_customers
     *
     * @var string
     */
    public $qualityGroupId;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @example wcm_start
     *
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var mixed[]
     */
    public $subNodeCol;
    protected $_name = [
        'bizType' => 'bizType',
        'checkExplanation' => 'checkExplanation',
        'checkPassed' => 'checkPassed',
        'checkProcess' => 'checkProcess',
        'checked' => 'checked',
        'gmtEnd' => 'gmtEnd',
        'gmtStart' => 'gmtStart',
        'mode' => 'mode',
        'originDialogue' => 'originDialogue',
        'qualityGroupId' => 'qualityGroupId',
        'ruleDescription' => 'ruleDescription',
        'ruleId' => 'ruleId',
        'ruleType' => 'ruleType',
        'subNodeCol' => 'subNodeCol',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }
        if (null !== $this->checkExplanation) {
            $res['checkExplanation'] = $this->checkExplanation;
        }
        if (null !== $this->checkPassed) {
            $res['checkPassed'] = $this->checkPassed;
        }
        if (null !== $this->checkProcess) {
            $res['checkProcess'] = $this->checkProcess;
        }
        if (null !== $this->checked) {
            $res['checked'] = $this->checked;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->originDialogue) {
            $res['originDialogue'] = [];
            if (null !== $this->originDialogue && \is_array($this->originDialogue)) {
                $n = 0;
                foreach ($this->originDialogue as $item) {
                    $res['originDialogue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qualityGroupId) {
            $res['qualityGroupId'] = $this->qualityGroupId;
        }
        if (null !== $this->ruleDescription) {
            $res['ruleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }
        if (null !== $this->subNodeCol) {
            $res['subNodeCol'] = $this->subNodeCol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityCheckList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }
        if (isset($map['checkExplanation'])) {
            $model->checkExplanation = $map['checkExplanation'];
        }
        if (isset($map['checkPassed'])) {
            $model->checkPassed = $map['checkPassed'];
        }
        if (isset($map['checkProcess'])) {
            $model->checkProcess = $map['checkProcess'];
        }
        if (isset($map['checked'])) {
            $model->checked = $map['checked'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }
        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['originDialogue'])) {
            if (!empty($map['originDialogue'])) {
                $model->originDialogue = [];
                $n = 0;
                foreach ($map['originDialogue'] as $item) {
                    $model->originDialogue[$n++] = null !== $item ? originDialogue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['qualityGroupId'])) {
            $model->qualityGroupId = $map['qualityGroupId'];
        }
        if (isset($map['ruleDescription'])) {
            $model->ruleDescription = $map['ruleDescription'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }
        if (isset($map['subNodeCol'])) {
            if (!empty($map['subNodeCol'])) {
                $model->subNodeCol = $map['subNodeCol'];
            }
        }

        return $model;
    }
}
