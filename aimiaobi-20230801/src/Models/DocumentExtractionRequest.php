<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class DocumentExtractionRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'urls' => 'Urls',
    ];

    public function validate()
    {
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['Urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['Urls'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Urls'])) {
            if (!empty($map['Urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['Urls'] as $item1) {
                    $model->urls[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
