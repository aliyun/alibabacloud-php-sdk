<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody\data\modelProviderList;

class data extends Model
{
    /**
     * @var string
     */
    public $defaultModel;

    /**
     * @var modelProviderList[]
     */
    public $modelProviderList;

    /**
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var string
     */
    public $modelTemplateName;
    protected $_name = [
        'defaultModel' => 'DefaultModel',
        'modelProviderList' => 'ModelProviderList',
        'modelTemplateId' => 'ModelTemplateId',
        'modelTemplateName' => 'ModelTemplateName',
    ];

    public function validate()
    {
        if (\is_array($this->modelProviderList)) {
            Model::validateArray($this->modelProviderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultModel) {
            $res['DefaultModel'] = $this->defaultModel;
        }

        if (null !== $this->modelProviderList) {
            if (\is_array($this->modelProviderList)) {
                $res['ModelProviderList'] = [];
                $n1 = 0;
                foreach ($this->modelProviderList as $item1) {
                    $res['ModelProviderList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->modelTemplateName) {
            $res['ModelTemplateName'] = $this->modelTemplateName;
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
        if (isset($map['DefaultModel'])) {
            $model->defaultModel = $map['DefaultModel'];
        }

        if (isset($map['ModelProviderList'])) {
            if (!empty($map['ModelProviderList'])) {
                $model->modelProviderList = [];
                $n1 = 0;
                foreach ($map['ModelProviderList'] as $item1) {
                    $model->modelProviderList[$n1] = modelProviderList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['ModelTemplateName'])) {
            $model->modelTemplateName = $map['ModelTemplateName'];
        }

        return $model;
    }
}
