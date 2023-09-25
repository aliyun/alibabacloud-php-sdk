<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 可用的授权码列表
     *
     * @var string[]
     */
    public $authCodeList;

    /**
     * @description API demo链接
     *
     * @example 示例值
     *
     * @var string
     */
    public $demoAddress;

    /**
     * @description API文档链接
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $docAddress;

    /**
     * @description 枚举值定义链接
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $enumDefinitionAddress;

    /**
     * @description 流程名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $flowName;

    /**
     * @description 行业id
     *
     * @example 83
     *
     * @var int
     */
    public $industryId;

    /**
     * @description 行业名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $industryName;

    /**
     * @description 标签参数列表
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description 场景id
     *
     * @example 41
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description 场景名称
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description 标签id
     *
     * @example 31
     *
     * @var int
     */
    public $tagId;

    /**
     * @description 标签名称
     *
     * @example 示例值
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'authCodeList'          => 'AuthCodeList',
        'demoAddress'           => 'DemoAddress',
        'docAddress'            => 'DocAddress',
        'enumDefinitionAddress' => 'EnumDefinitionAddress',
        'flowName'              => 'FlowName',
        'industryId'            => 'IndustryId',
        'industryName'          => 'IndustryName',
        'paramList'             => 'ParamList',
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
