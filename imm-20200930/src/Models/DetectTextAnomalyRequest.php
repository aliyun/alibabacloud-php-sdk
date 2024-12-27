<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectTextAnomalyRequest extends Model
{
    /**
     * @description The text to be detected. It can contain up to 10,000 characters (including punctuation marks). Only Chinese text can be detected.
     *
     * This parameter is required.
     * @example content
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'content'     => 'Content',
        'projectName' => 'ProjectName',
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectTextAnomalyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
