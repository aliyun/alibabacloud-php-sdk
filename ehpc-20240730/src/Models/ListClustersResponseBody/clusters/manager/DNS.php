<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\manager;

use AlibabaCloud\Tea\Model;

class DNS extends Model
{
    /**
     * @description The resolution type.
     *
     * @example NIS
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the domain name resolution service.
     *
     * @example 2.31
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'type'    => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DNS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
