<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest;

use AlibabaCloud\Tea\Model;

class contentTags extends Model
{
    /**
     * @example 一级标签-二级标签
     *
     * @var string
     */
    public $tagDefinePrompt;

    /**
     * @example 一级标签-二级标签
     *
     * @var string
     */
    public $tagName;

    /**
     * @example singleTagValue
     *
     * @var string
     */
    public $tagTaskType;

    /**
     * @var string
     */
    public $tagValueDefinePrompt;
    protected $_name = [
        'tagDefinePrompt' => 'TagDefinePrompt',
        'tagName' => 'TagName',
        'tagTaskType' => 'TagTaskType',
        'tagValueDefinePrompt' => 'TagValueDefinePrompt',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagDefinePrompt) {
            $res['TagDefinePrompt'] = $this->tagDefinePrompt;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagTaskType) {
            $res['TagTaskType'] = $this->tagTaskType;
        }
        if (null !== $this->tagValueDefinePrompt) {
            $res['TagValueDefinePrompt'] = $this->tagValueDefinePrompt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagDefinePrompt'])) {
            $model->tagDefinePrompt = $map['TagDefinePrompt'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagTaskType'])) {
            $model->tagTaskType = $map['TagTaskType'];
        }
        if (isset($map['TagValueDefinePrompt'])) {
            $model->tagValueDefinePrompt = $map['TagValueDefinePrompt'];
        }

        return $model;
    }
}
