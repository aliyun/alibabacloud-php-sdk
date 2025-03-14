<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateDynamicDictRequest extends Model
{
    /**
     * @description Specifies whether to overwrite existing data. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $override;

    /**
     * @description The source IP address.
     *
     * @example 123.103.9.***
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'override' => 'Override',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->override) {
            $res['Override'] = $this->override;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDynamicDictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Override'])) {
            $model->override = $map['Override'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
