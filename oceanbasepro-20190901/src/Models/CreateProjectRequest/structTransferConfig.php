<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\Tea\Model;

class structTransferConfig extends Model
{
    /**
     * @example DO_NOTHING_IF_BYTE_USED
     *
     * @var string
     */
    public $byteCharConvertStrategy;

    /**
     * @example true
     *
     * @var bool
     */
    public $deferIndexCreation;
    protected $_name = [
        'byteCharConvertStrategy' => 'ByteCharConvertStrategy',
        'deferIndexCreation'      => 'DeferIndexCreation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byteCharConvertStrategy) {
            $res['ByteCharConvertStrategy'] = $this->byteCharConvertStrategy;
        }
        if (null !== $this->deferIndexCreation) {
            $res['DeferIndexCreation'] = $this->deferIndexCreation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByteCharConvertStrategy'])) {
            $model->byteCharConvertStrategy = $map['ByteCharConvertStrategy'];
        }
        if (isset($map['DeferIndexCreation'])) {
            $model->deferIndexCreation = $map['DeferIndexCreation'];
        }

        return $model;
    }
}
