<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetPromptResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $promptContent;

    /**
     * @example marketCopy
     *
     * @var string
     */
    public $promptId;
    protected $_name = [
        'promptContent' => 'PromptContent',
        'promptId'      => 'PromptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promptContent) {
            $res['PromptContent'] = $this->promptContent;
        }
        if (null !== $this->promptId) {
            $res['PromptId'] = $this->promptId;
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
        if (isset($map['PromptContent'])) {
            $model->promptContent = $map['PromptContent'];
        }
        if (isset($map['PromptId'])) {
            $model->promptId = $map['PromptId'];
        }

        return $model;
    }
}
