<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\ListVersionsResponseBody\versions;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $drdsVersion;

    /**
     * @var bool
     */
    public $latest;
    protected $_name = [
        'drdsVersion' => 'DrdsVersion',
        'latest'      => 'Latest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsVersion) {
            $res['DrdsVersion'] = $this->drdsVersion;
        }
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsVersion'])) {
            $model->drdsVersion = $map['DrdsVersion'];
        }
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }

        return $model;
    }
}
