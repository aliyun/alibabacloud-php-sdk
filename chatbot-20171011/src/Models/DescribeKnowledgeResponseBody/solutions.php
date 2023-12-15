<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 2020-11-25T11:44:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-11-26T06:36:14Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $perspectiveIds;

    /**
     * @var string
     */
    public $plainText;

    /**
     * @example 30001979424
     *
     * @var int
     */
    public $solutionId;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'content'        => 'Content',
        'createTime'     => 'CreateTime',
        'modifyTime'     => 'ModifyTime',
        'perspectiveIds' => 'PerspectiveIds',
        'plainText'      => 'PlainText',
        'solutionId'     => 'SolutionId',
        'summary'        => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->perspectiveIds) {
            $res['PerspectiveIds'] = $this->perspectiveIds;
        }
        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['PerspectiveIds'])) {
            if (!empty($map['PerspectiveIds'])) {
                $model->perspectiveIds = $map['PerspectiveIds'];
            }
        }
        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
