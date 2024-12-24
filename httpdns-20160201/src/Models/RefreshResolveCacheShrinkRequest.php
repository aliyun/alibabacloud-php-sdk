<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Tea\Model;

class RefreshResolveCacheShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $domainsShrink;
    protected $_name = [
        'domainsShrink' => 'Domains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainsShrink) {
            $res['Domains'] = $this->domainsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshResolveCacheShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            $model->domainsShrink = $map['Domains'];
        }

        return $model;
    }
}
