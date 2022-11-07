<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Tea\Model;

class resolutions extends Model
{
    /**
     * @var string[]
     */
    public $resolution;
    protected $_name = [
        'resolution' => 'Resolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resolutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resolution'])) {
            if (!empty($map['Resolution'])) {
                $model->resolution = $map['Resolution'];
            }
        }

        return $model;
    }
}
