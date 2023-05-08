<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetDetailByUuidRequest extends Model
{
    /**
     * @description The operating system version of the server.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The details of the CPU.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The public IP address of the server.
     *
     * @example 9e6cad93-a379-46fd-a701-9bbf02f4****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'lang'     => 'Lang',
        'sourceIp' => 'SourceIp',
        'uuid'     => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetDetailByUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
