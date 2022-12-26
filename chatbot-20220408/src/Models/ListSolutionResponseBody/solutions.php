<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSolutionResponseBody;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $contentType;

    /**
     * @example 2022-03-29T03:55:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-03-29T06:23:53Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $perspectiveCodes;

    /**
     * @var string
     */
    public $plainText;

    /**
     * @example 496
     *
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'createTime'       => 'CreateTime',
        'modifyTime'       => 'ModifyTime',
        'perspectiveCodes' => 'PerspectiveCodes',
        'plainText'        => 'PlainText',
        'solutionId'       => 'SolutionId',
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
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->perspectiveCodes) {
            $res['PerspectiveCodes'] = $this->perspectiveCodes;
        }
        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['PerspectiveCodes'])) {
            if (!empty($map['PerspectiveCodes'])) {
                $model->perspectiveCodes = $map['PerspectiveCodes'];
            }
        }
        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
