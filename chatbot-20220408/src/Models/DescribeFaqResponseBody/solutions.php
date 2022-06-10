<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @description 答案内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 答案类型(0纯文本，1富文本）
     *
     * @var int
     */
    public $contentType;

    /**
     * @description 创建时间(UTC 时间)
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 修改时间(UTC 时间)
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description 视角code列表
     *
     * @var string[]
     */
    public $perspectiveCodes;

    /**
     * @description 答案纯文本内容
     *
     * @var string
     */
    public $plainText;

    /**
     * @description 答案ID
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
