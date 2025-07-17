<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class CreatePromptTemplateResponseBody extends Model
{
    /**
     * @example 6e49109bfeb94a39bb268f4e483ccxxx
     *
     * @var string
     */
    public $promptTemplateId;

    /**
     * @example FE9B6CBF-47E6-5D76-9C5D-B814DD5ABxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'promptTemplateId' => 'promptTemplateId',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->promptTemplateId) {
            $res['promptTemplateId'] = $this->promptTemplateId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePromptTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['promptTemplateId'])) {
            $model->promptTemplateId = $map['promptTemplateId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
