<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class GetDomainRequest extends Model
{
    /**
     * @var string
     */
    public $appGroupIdentity;
    protected $_name = [
        'appGroupIdentity' => 'appGroupIdentity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupIdentity) {
            $res['appGroupIdentity'] = $this->appGroupIdentity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appGroupIdentity'])) {
            $model->appGroupIdentity = $map['appGroupIdentity'];
        }

        return $model;
    }
}
