<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData;
use AlibabaCloud\Tea\Model;

class assistant extends Model
{
    /**
     * @var metaData
     */
    public $metaData;

    /**
     * @example contract_examime
     *
     * @var string
     */
    public $type;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'metaData' => 'metaData',
        'type'     => 'type',
        'version'  => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaData) {
            $res['metaData'] = null !== $this->metaData ? $this->metaData->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assistant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metaData'])) {
            $model->metaData = metaData::fromMap($map['metaData']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
