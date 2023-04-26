<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The status of the domain name for CDN. Valid values:
     *
     *   **online**: indicates that the domain name is enabled.
     *   **offline**: indicates that the domain name is disabled.
     *   **configuring**: indicates that the domain name is being configured.
     *   **configure_failed**: indicates that the domain name failed to be configured.
     *   **checking**: indicates that the domain name is under review.
     *   **check_failed**: indicates that the domain name failed the review.
     *
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @description The canonical domain name that is assigned to the domain name for CDN.
     *
     * @example value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
