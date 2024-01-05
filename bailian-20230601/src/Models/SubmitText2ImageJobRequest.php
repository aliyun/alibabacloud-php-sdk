<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class SubmitText2ImageJobRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $n;

    /**
     * @var string
     */
    public $negativePrompt;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $style;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'appId'          => 'AppId',
        'n'              => 'N',
        'negativePrompt' => 'NegativePrompt',
        'prompt'         => 'Prompt',
        'seed'           => 'Seed',
        'size'           => 'Size',
        'style'          => 'Style',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->n) {
            $res['N'] = $this->n;
        }
        if (null !== $this->negativePrompt) {
            $res['NegativePrompt'] = $this->negativePrompt;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitText2ImageJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['N'])) {
            $model->n = $map['N'];
        }
        if (isset($map['NegativePrompt'])) {
            $model->negativePrompt = $map['NegativePrompt'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }

        return $model;
    }
}
