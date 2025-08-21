<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody;

use AlibabaCloud\Dara\Model;

class solutions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $contentType;

    /**
     * @var string
     */
    public $createTime;

    /**
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
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'perspectiveCodes' => 'PerspectiveCodes',
        'plainText' => 'PlainText',
        'solutionId' => 'SolutionId',
    ];

    public function validate()
    {
        if (\is_array($this->perspectiveCodes)) {
            Model::validateArray($this->perspectiveCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->perspectiveCodes)) {
                $res['PerspectiveCodes'] = [];
                $n1 = 0;
                foreach ($this->perspectiveCodes as $item1) {
                    $res['PerspectiveCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }

        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
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
                $model->perspectiveCodes = [];
                $n1 = 0;
                foreach ($map['PerspectiveCodes'] as $item1) {
                    $model->perspectiveCodes[$n1] = $item1;
                    ++$n1;
                }
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
