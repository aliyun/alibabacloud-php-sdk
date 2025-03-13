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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig\stepForCustomSummaryStyleConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig\stepForNewsBroadcastContentConfig;
use AlibabaCloud\Tea\Model;

class hotTopicBroadcastConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var stepForCustomSummaryStyleConfig
     */
    public $stepForCustomSummaryStyleConfig;

    /**
     * @description This parameter is required.
     *
     * @var stepForNewsBroadcastContentConfig
     */
    public $stepForNewsBroadcastContentConfig;
    protected $_name = [
        'stepForCustomSummaryStyleConfig' => 'StepForCustomSummaryStyleConfig',
        'stepForNewsBroadcastContentConfig' => 'StepForNewsBroadcastContentConfig',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $res['StepForCustomSummaryStyleConfig'] = null !== $this->stepForCustomSummaryStyleConfig ? $this->stepForCustomSummaryStyleConfig->toMap() : null;
        }
        if (null !== $this->stepForNewsBroadcastContentConfig) {
            $res['StepForNewsBroadcastContentConfig'] = null !== $this->stepForNewsBroadcastContentConfig ? $this->stepForNewsBroadcastContentConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotTopicBroadcastConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfig = stepForCustomSummaryStyleConfig::fromMap($map['StepForCustomSummaryStyleConfig']);
        }
        if (isset($map['StepForNewsBroadcastContentConfig'])) {
            $model->stepForNewsBroadcastContentConfig = stepForNewsBroadcastContentConfig::fromMap($map['StepForNewsBroadcastContentConfig']);
        }

        return $model;
    }
}
