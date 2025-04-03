<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics;

class clusterTopicResult extends Model
{
    /**
     * @var clusterTopics[]
     */
    public $clusterTopics;

    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'clusterTopics' => 'ClusterTopics',
        'generateFinished' => 'GenerateFinished',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate()
    {
        if (\is_array($this->clusterTopics)) {
            Model::validateArray($this->clusterTopics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterTopics) {
            if (\is_array($this->clusterTopics)) {
                $res['ClusterTopics'] = [];
                $n1 = 0;
                foreach ($this->clusterTopics as $item1) {
                    $res['ClusterTopics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTopics'])) {
            if (!empty($map['ClusterTopics'])) {
                $model->clusterTopics = [];
                $n1 = 0;
                foreach ($map['ClusterTopics'] as $item1) {
                    $model->clusterTopics[$n1++] = clusterTopics::fromMap($item1);
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
