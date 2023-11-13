<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody\domainCacheConfigs;

use AlibabaCloud\Tea\Model;

class customRules extends Model
{
    /**
     * @description The expiration time of the page cache. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $cacheTtl;

    /**
     * @description The cache mode. Valid values:
     *
     *   **standard**: The standard cache mode is used.
     *   **aggressive**: The enhanced cache mode is used.
     *   **bypass**: No data is cached.
     *
     * @example standard
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the rule.
     *
     * @example c1
     *
     * @var string
     */
    public $name;

    /**
     * @description The path to the cached page.
     *
     * @example /blog/
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'cacheTtl' => 'CacheTtl',
        'mode'     => 'Mode',
        'name'     => 'Name',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheTtl) {
            $res['CacheTtl'] = $this->cacheTtl;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheTtl'])) {
            $model->cacheTtl = $map['CacheTtl'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
