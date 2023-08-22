<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @description The raw V1 compatibility information.
     *
     * @example null
     *
     * @var mixed[]
     */
    public $v1Compatibility;
    protected $_name = [
        'v1Compatibility' => 'V1Compatibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->v1Compatibility) {
            $res['V1Compatibility'] = $this->v1Compatibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return history
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['V1Compatibility'])) {
            $model->v1Compatibility = $map['V1Compatibility'];
        }

        return $model;
    }
}
