<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList;

class data extends Model
{
    /**
     * @var string[]
     */
    public $authCodeList;
    /**
     * @var string
     */
    public $complexityType;
    /**
     * @var string
     */
    public $demoAddress;
    /**
     * @var string
     */
    public $docAddress;
    /**
     * @var string
     */
    public $enumDefinitionAddress;
    /**
     * @var string
     */
    public $flowName;
    /**
     * @var int
     */
    public $industryId;
    /**
     * @var string
     */
    public $industryName;
    /**
     * @var paramList[]
     */
    public $paramList;
    /**
     * @var string
     */
    public $richTextDescription;
    /**
     * @var int
     */
    public $sceneId;
    /**
     * @var string
     */
    public $sceneName;
    /**
     * @var int
     */
    public $tagId;
    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'authCodeList'          => 'AuthCodeList',
        'complexityType'        => 'ComplexityType',
        'demoAddress'           => 'DemoAddress',
        'docAddress'            => 'DocAddress',
        'enumDefinitionAddress' => 'EnumDefinitionAddress',
        'flowName'              => 'FlowName',
        'industryId'            => 'IndustryId',
        'industryName'          => 'IndustryName',
        'paramList'             => 'ParamList',
        'richTextDescription'   => 'RichTextDescription',
        'sceneId'               => 'SceneId',
        'sceneName'             => 'SceneName',
        'tagId'                 => 'TagId',
        'tagName'               => 'TagName',
    ];

    public function validate()
    {
        if (\is_array($this->authCodeList)) {
            Model::validateArray($this->authCodeList);
        }
        if (\is_array($this->paramList)) {
            Model::validateArray($this->paramList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCodeList) {
            if (\is_array($this->authCodeList)) {
                $res['AuthCodeList'] = [];
                $n1                  = 0;
                foreach ($this->authCodeList as $item1) {
                    $res['AuthCodeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->complexityType) {
            $res['ComplexityType'] = $this->complexityType;
        }

        if (null !== $this->demoAddress) {
            $res['DemoAddress'] = $this->demoAddress;
        }

        if (null !== $this->docAddress) {
            $res['DocAddress'] = $this->docAddress;
        }

        if (null !== $this->enumDefinitionAddress) {
            $res['EnumDefinitionAddress'] = $this->enumDefinitionAddress;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }

        if (null !== $this->industryName) {
            $res['IndustryName'] = $this->industryName;
        }

        if (null !== $this->paramList) {
            if (\is_array($this->paramList)) {
                $res['ParamList'] = [];
                $n1               = 0;
                foreach ($this->paramList as $item1) {
                    $res['ParamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->richTextDescription) {
            $res['RichTextDescription'] = $this->richTextDescription;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['AuthCodeList'])) {
            if (!empty($map['AuthCodeList'])) {
                $model->authCodeList = [];
                $n1                  = 0;
                foreach ($map['AuthCodeList'] as $item1) {
                    $model->authCodeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ComplexityType'])) {
            $model->complexityType = $map['ComplexityType'];
        }

        if (isset($map['DemoAddress'])) {
            $model->demoAddress = $map['DemoAddress'];
        }

        if (isset($map['DocAddress'])) {
            $model->docAddress = $map['DocAddress'];
        }

        if (isset($map['EnumDefinitionAddress'])) {
            $model->enumDefinitionAddress = $map['EnumDefinitionAddress'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }

        if (isset($map['IndustryName'])) {
            $model->industryName = $map['IndustryName'];
        }

        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n1               = 0;
                foreach ($map['ParamList'] as $item1) {
                    $model->paramList[$n1++] = paramList::fromMap($item1);
                }
            }
        }

        if (isset($map['RichTextDescription'])) {
            $model->richTextDescription = $map['RichTextDescription'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
