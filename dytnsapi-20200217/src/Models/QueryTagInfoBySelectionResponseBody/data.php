<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of available authorization codes.
     *
     * @var string[]
     */
    public $authCodeList;

    /**
     * @var string
     */
    public $complexityType;

    /**
     * @description The URL for the API demo.
     *
     * @example https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz
     *
     * @var string
     */
    public $demoAddress;

    /**
     * @description The URL for the API documentation.
     *
     * @example https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz
     *
     * @var string
     */
    public $docAddress;

    /**
     * @description The URL for the definitions of the enumerated values.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $enumDefinitionAddress;

    /**
     * @description The flow name.
     *
     * @example process name
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The industry ID.
     *
     * @example 83
     *
     * @var int
     */
    public $industryId;

    /**
     * @description The industry name.
     *
     * @example logistics
     *
     * @var string
     */
    public $industryName;

    /**
     * @description The list of tag parameters.
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @var string
     */
    public $richTextDescription;

    /**
     * @description The scene ID.
     *
     * @example 41
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description The scene name.
     *
     * @example General scenario
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description The tag ID.
     *
     * @example 31
     *
     * @var int
     */
    public $tagId;

    /**
     * @description The tag name.
     *
     * @example Number ownership
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCodeList) {
            $res['AuthCodeList'] = $this->authCodeList;
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
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCodeList'])) {
            if (!empty($map['AuthCodeList'])) {
                $model->authCodeList = $map['AuthCodeList'];
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
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
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
