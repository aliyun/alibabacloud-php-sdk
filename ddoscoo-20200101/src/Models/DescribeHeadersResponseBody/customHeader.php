<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHeadersResponseBody;

use AlibabaCloud\Tea\Model;

class customHeader extends Model
{
    /**
     * @description The domain name of the website.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The header of the response.
     *
     * @example {"X-Forwarded-ClientSrcPort":"","header1":"hLeLele"}
     *
     * @var string
     */
    public $headers;
    protected $_name = [
        'domain'  => 'Domain',
        'headers' => 'Headers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customHeader
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }

        return $model;
    }
}
