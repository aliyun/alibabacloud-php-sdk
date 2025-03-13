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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunHotTopicSummaryShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2024-10-16_8
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $stepForCustomSummaryStyleConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $topicIdsShrink;
    protected $_name = [
        'hotTopicVersion' => 'hotTopicVersion',
        'stepForCustomSummaryStyleConfigShrink' => 'stepForCustomSummaryStyleConfig',
        'topicIdsShrink' => 'topicIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->stepForCustomSummaryStyleConfigShrink) {
            $res['stepForCustomSummaryStyleConfig'] = $this->stepForCustomSummaryStyleConfigShrink;
        }
        if (null !== $this->topicIdsShrink) {
            $res['topicIds'] = $this->topicIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunHotTopicSummaryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }
        if (isset($map['stepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfigShrink = $map['stepForCustomSummaryStyleConfig'];
        }
        if (isset($map['topicIds'])) {
            $model->topicIdsShrink = $map['topicIds'];
        }

        return $model;
    }
}
