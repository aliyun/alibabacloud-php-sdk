<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class GetPromptTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 6e49109bfeb94a39bb268f4e483ccxxx
     *
     * @var string
     */
    public $promptTemplateId;

    /**
     * @example 8C56C7AF-6573-19CE-B018-E05E1EDCF4C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ["theme"]
     *
     * @var string[]
     */
    public $variables;

    /**
     * @example llm-us9hjmt32nysdxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'content'          => 'content',
        'name'             => 'name',
        'promptTemplateId' => 'promptTemplateId',
        'requestId'        => 'requestId',
        'variables'        => 'variables',
        'workspaceId'      => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->promptTemplateId) {
            $res['promptTemplateId'] = $this->promptTemplateId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->variables) {
            $res['variables'] = $this->variables;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPromptTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['promptTemplateId'])) {
            $model->promptTemplateId = $map['promptTemplateId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = $map['variables'];
            }
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
