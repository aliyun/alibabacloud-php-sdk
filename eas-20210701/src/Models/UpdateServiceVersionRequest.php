<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceVersionRequest extends Model
{
    /**
     * @description The destination version of the service. The value must be of the INT type. The value must be greater than 0 and smaller than the current version of the service.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
