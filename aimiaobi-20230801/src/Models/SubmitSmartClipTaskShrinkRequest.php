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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitSmartClipTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $editingConfigShrink;

    /**
     * @var string
     */
    public $extendParam;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $inputConfigShrink;

    /**
     * @var string
     */
    public $outputConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'editingConfigShrink' => 'EditingConfig',
        'extendParam' => 'ExtendParam',
        'inputConfigShrink' => 'InputConfig',
        'outputConfigShrink' => 'OutputConfig',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingConfigShrink) {
            $res['EditingConfig'] = $this->editingConfigShrink;
        }
        if (null !== $this->extendParam) {
            $res['ExtendParam'] = $this->extendParam;
        }
        if (null !== $this->inputConfigShrink) {
            $res['InputConfig'] = $this->inputConfigShrink;
        }
        if (null !== $this->outputConfigShrink) {
            $res['OutputConfig'] = $this->outputConfigShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmartClipTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingConfig'])) {
            $model->editingConfigShrink = $map['EditingConfig'];
        }
        if (isset($map['ExtendParam'])) {
            $model->extendParam = $map['ExtendParam'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfigShrink = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfigShrink = $map['OutputConfig'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
