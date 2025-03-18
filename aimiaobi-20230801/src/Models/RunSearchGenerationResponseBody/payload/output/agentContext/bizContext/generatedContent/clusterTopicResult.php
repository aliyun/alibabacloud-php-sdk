<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics;
use AlibabaCloud\Tea\Model;

class clusterTopicResult extends Model
{
    /**
     * @var clusterTopics[]
     */
    public $clusterTopics;

    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @example xx
     *
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'clusterTopics' => 'ClusterTopics',
        'generateFinished' => 'GenerateFinished',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTopics) {
            $res['ClusterTopics'] = [];
            if (null !== $this->clusterTopics && \is_array($this->clusterTopics)) {
                $n = 0;
                foreach ($this->clusterTopics as $item) {
                    $res['ClusterTopics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }
        if (null !== $this->textGenerate) {
            $res['TextGenerate'] = $this->textGenerate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTopicResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTopics'])) {
            if (!empty($map['ClusterTopics'])) {
                $model->clusterTopics = [];
                $n = 0;
                foreach ($map['ClusterTopics'] as $item) {
                    $model->clusterTopics[$n++] = null !== $item ? clusterTopics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GenerateFinished'])) {
            $model->generateFinished = $map['GenerateFinished'];
        }
        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        return $model;
    }
}
