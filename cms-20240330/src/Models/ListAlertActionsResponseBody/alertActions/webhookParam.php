<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class webhookParam extends Model
{
    /**
     * @example JSON
     *
     * @var string
     */
    public $contentType;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @example http://www.test.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'contentType' => 'contentType',
        'headers' => 'headers',
        'method' => 'method',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhookParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
