<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class MmAppBindingRagRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $knowledgeBaseCodeList;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'knowledgeBaseCodeList' => 'KnowledgeBaseCodeList',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->knowledgeBaseCodeList)) {
            Model::validateArray($this->knowledgeBaseCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->knowledgeBaseCodeList) {
            if (\is_array($this->knowledgeBaseCodeList)) {
                $res['KnowledgeBaseCodeList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeBaseCodeList as $item1) {
                    $res['KnowledgeBaseCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['KnowledgeBaseCodeList'])) {
            if (!empty($map['KnowledgeBaseCodeList'])) {
                $model->knowledgeBaseCodeList = [];
                $n1 = 0;
                foreach ($map['KnowledgeBaseCodeList'] as $item1) {
                    $model->knowledgeBaseCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
