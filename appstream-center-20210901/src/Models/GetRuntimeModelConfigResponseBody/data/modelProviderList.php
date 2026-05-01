<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody\data\modelProviderList\llmInfoList;

class modelProviderList extends Model
{
    /**
     * @var llmInfoList[]
     */
    public $llmInfoList;

    /**
     * @var string
     */
    public $modelProviderTemplateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'llmInfoList' => 'LlmInfoList',
        'modelProviderTemplateId' => 'ModelProviderTemplateId',
        'name' => 'Name',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
        if (\is_array($this->llmInfoList)) {
            Model::validateArray($this->llmInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmInfoList) {
            if (\is_array($this->llmInfoList)) {
                $res['LlmInfoList'] = [];
                $n1 = 0;
                foreach ($this->llmInfoList as $item1) {
                    $res['LlmInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelProviderTemplateId) {
            $res['ModelProviderTemplateId'] = $this->modelProviderTemplateId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
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
        if (isset($map['LlmInfoList'])) {
            if (!empty($map['LlmInfoList'])) {
                $model->llmInfoList = [];
                $n1 = 0;
                foreach ($map['LlmInfoList'] as $item1) {
                    $model->llmInfoList[$n1] = llmInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelProviderTemplateId'])) {
            $model->modelProviderTemplateId = $map['ModelProviderTemplateId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
