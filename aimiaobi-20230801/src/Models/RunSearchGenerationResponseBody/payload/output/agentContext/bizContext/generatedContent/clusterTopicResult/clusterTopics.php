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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\imageSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\textSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult;
use AlibabaCloud\Tea\Model;

class clusterTopics extends Model
{
    /**
     * @var imageSearchResult
     */
    public $imageSearchResult;

    /**
     * @var textSearchResult
     */
    public $textSearchResult;

    /**
     * @example xx
     *
     * @var string
     */
    public $topic;

    /**
     * @var videoSearchResult
     */
    public $videoSearchResult;
    protected $_name = [
        'imageSearchResult' => 'ImageSearchResult',
        'textSearchResult' => 'TextSearchResult',
        'topic' => 'Topic',
        'videoSearchResult' => 'VideoSearchResult',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageSearchResult) {
            $res['ImageSearchResult'] = null !== $this->imageSearchResult ? $this->imageSearchResult->toMap() : null;
        }
        if (null !== $this->textSearchResult) {
            $res['TextSearchResult'] = null !== $this->textSearchResult ? $this->textSearchResult->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->videoSearchResult) {
            $res['VideoSearchResult'] = null !== $this->videoSearchResult ? $this->videoSearchResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTopics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageSearchResult'])) {
            $model->imageSearchResult = imageSearchResult::fromMap($map['ImageSearchResult']);
        }
        if (isset($map['TextSearchResult'])) {
            $model->textSearchResult = textSearchResult::fromMap($map['TextSearchResult']);
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['VideoSearchResult'])) {
            $model->videoSearchResult = videoSearchResult::fromMap($map['VideoSearchResult']);
        }

        return $model;
    }
}
