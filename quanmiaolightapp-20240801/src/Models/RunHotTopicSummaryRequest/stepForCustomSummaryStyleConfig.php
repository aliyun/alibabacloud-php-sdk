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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryRequest;

use AlibabaCloud\Tea\Model;

class stepForCustomSummaryStyleConfig extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $summaryImageCount;

    /**
     * @description This parameter is required.
     *
     * @example qwen-max
     *
     * @var string
     */
    public $summaryModel;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $summaryPrompt;
    protected $_name = [
        'summaryImageCount' => 'summaryImageCount',
        'summaryModel' => 'summaryModel',
        'summaryPrompt' => 'summaryPrompt',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryImageCount) {
            $res['summaryImageCount'] = $this->summaryImageCount;
        }
        if (null !== $this->summaryModel) {
            $res['summaryModel'] = $this->summaryModel;
        }
        if (null !== $this->summaryPrompt) {
            $res['summaryPrompt'] = $this->summaryPrompt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepForCustomSummaryStyleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['summaryImageCount'])) {
            $model->summaryImageCount = $map['summaryImageCount'];
        }
        if (isset($map['summaryModel'])) {
            $model->summaryModel = $map['summaryModel'];
        }
        if (isset($map['summaryPrompt'])) {
            $model->summaryPrompt = $map['summaryPrompt'];
        }

        return $model;
    }
}
