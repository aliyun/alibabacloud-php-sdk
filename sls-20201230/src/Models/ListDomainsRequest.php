<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListDomainsRequest extends Model
{
    /**
     * @description The domain name that is used to match custom domain names. For example, if you set domainName to `example.com`, the matched domain names are `a.example.com` and `b.example.com`.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The line from which the query starts. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page. Default value: 500. Maximum value: 500.
     *
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'domainName' => 'domainName',
        'offset'     => 'offset',
        'size'       => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
