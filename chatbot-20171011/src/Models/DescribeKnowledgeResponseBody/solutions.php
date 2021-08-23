<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @var string[]
     */
    public $perspectiveIds;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $plainText;

    /**
     * @var int
     */
    public $solutionId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'perspectiveIds' => 'PerspectiveIds',
        'summary'        => 'Summary',
        'createTime'     => 'CreateTime',
        'plainText'      => 'PlainText',
        'solutionId'     => 'SolutionId',
        'content'        => 'Content',
        'modifyTime'     => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perspectiveIds) {
            $res['PerspectiveIds'] = $this->perspectiveIds;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerspectiveIds'])) {
            if (!empty($map['PerspectiveIds'])) {
                $model->perspectiveIds = $map['PerspectiveIds'];
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
