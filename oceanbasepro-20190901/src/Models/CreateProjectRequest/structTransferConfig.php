<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\Dara\Model;

class structTransferConfig extends Model
{
    /**
     * @var string
     */
    public $byteCharConvertStrategy;

    /**
     * @var bool
     */
    public $deferIndexCreation;
    protected $_name = [
        'byteCharConvertStrategy' => 'ByteCharConvertStrategy',
        'deferIndexCreation' => 'DeferIndexCreation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
