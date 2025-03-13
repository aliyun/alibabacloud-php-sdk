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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\backgroundMusicConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\mediaConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\speechConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\titleConfig;
use AlibabaCloud\Tea\Model;

class editingConfig extends Model
{
    /**
     * @var backgroundMusicConfig
     */
    public $backgroundMusicConfig;

    /**
     * @var mediaConfig
     */
    public $mediaConfig;

    /**
     * @var speechConfig
     */
    public $speechConfig;

    /**
     * @var titleConfig
     */
    public $titleConfig;
    protected $_name = [
        'backgroundMusicConfig' => 'BackgroundMusicConfig',
        'mediaConfig' => 'MediaConfig',
        'speechConfig' => 'SpeechConfig',
        'titleConfig' => 'TitleConfig',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundMusicConfig) {
            $res['BackgroundMusicConfig'] = null !== $this->backgroundMusicConfig ? $this->backgroundMusicConfig->toMap() : null;
        }
        if (null !== $this->mediaConfig) {
            $res['MediaConfig'] = null !== $this->mediaConfig ? $this->mediaConfig->toMap() : null;
        }
        if (null !== $this->speechConfig) {
            $res['SpeechConfig'] = null !== $this->speechConfig ? $this->speechConfig->toMap() : null;
        }
        if (null !== $this->titleConfig) {
            $res['TitleConfig'] = null !== $this->titleConfig ? $this->titleConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundMusicConfig'])) {
            $model->backgroundMusicConfig = backgroundMusicConfig::fromMap($map['BackgroundMusicConfig']);
        }
        if (isset($map['MediaConfig'])) {
            $model->mediaConfig = mediaConfig::fromMap($map['MediaConfig']);
        }
        if (isset($map['SpeechConfig'])) {
            $model->speechConfig = speechConfig::fromMap($map['SpeechConfig']);
        }
        if (isset($map['TitleConfig'])) {
            $model->titleConfig = titleConfig::fromMap($map['TitleConfig']);
        }

        return $model;
    }
}
