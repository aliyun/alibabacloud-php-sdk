<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesRequest\llmTemplateItems;

class BatchCreateLlmTemplatesRequest extends Model
{
    /**
     * @var llmTemplateItems[]
     */
    public $llmTemplateItems;

    /**
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var string
     */
    public $providerTemplateId;
    protected $_name = [
        'llmTemplateItems' => 'LlmTemplateItems',
        'modelTemplateId' => 'ModelTemplateId',
        'providerTemplateId' => 'ProviderTemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->llmTemplateItems)) {
            Model::validateArray($this->llmTemplateItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmTemplateItems) {
            if (\is_array($this->llmTemplateItems)) {
                $res['LlmTemplateItems'] = [];
                $n1 = 0;
                foreach ($this->llmTemplateItems as $item1) {
                    $res['LlmTemplateItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
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
        if (isset($map['LlmTemplateItems'])) {
            if (!empty($map['LlmTemplateItems'])) {
                $model->llmTemplateItems = [];
                $n1 = 0;
                foreach ($map['LlmTemplateItems'] as $item1) {
                    $model->llmTemplateItems[$n1] = llmTemplateItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        return $model;
    }
}
