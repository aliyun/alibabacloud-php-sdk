<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponseBody\data;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @example "X-bailian-extra": "MTAwNTQyNjQ5NTE2OTE3OA==",
     * "Content-Type": "application/pdf"
     * @var mixed
     */
    public $headers;

    /**
     * @example PUT
     *
     * @var string
     */
    public $method;

    /**
     * @example https://bailian-datahub-data-origin-prod.oss-cn-hangzhou.aliyuncs.com/1005426495169178/10024405/68abd1dea7b6404d8f7d7b9f7fbd332d.1716698936847.pdf?Expires=1716699536&OSSAccessKeyId=TestID&Signature=HfwPUZo4pR6DatSDym0zFKVh9Wg%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'headers' => 'Headers',
        'method'  => 'Method',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
