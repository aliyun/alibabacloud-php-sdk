<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\GetUserExecutionTemplateResponseBody\template;
use AlibabaCloud\Tea\Model;

class GetUserExecutionTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'content'   => 'Content',
        'requestId' => 'RequestId',
        'template'  => 'Template',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserExecutionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }

        return $model;
    }
}
