<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopUrlResponseBody;

use AlibabaCloud\Tea\Model;

class urlList extends Model
{
    /**
     * @description The total number of requests.
     *
     * @example 3390671
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name of the website.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The URL that is Base64-encoded.
     *
     * @example Lw==
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'count'  => 'Count',
        'domain' => 'Domain',
        'url'    => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
