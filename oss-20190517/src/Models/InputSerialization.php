<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InputSerialization extends Model
{
    /**
     * @var CSVInput
     */
    public $csv;

    /**
     * @var string
     */
    public $compressionType;

    /**
     * @var JSONInput
     */
    public $json;
    protected $_name = [
        'csv'             => 'CSV',
        'compressionType' => 'CompressionType',
        'json'            => 'JSON',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csv) {
            $res['CSV'] = null !== $this->csv ? $this->csv->toMap() : null;
        }
        if (null !== $this->compressionType) {
            $res['CompressionType'] = $this->compressionType;
        }
        if (null !== $this->json) {
            $res['JSON'] = null !== $this->json ? $this->json->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InputSerialization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CSV'])) {
            $model->csv = CSVInput::fromMap($map['CSV']);
        }
        if (isset($map['CompressionType'])) {
            $model->compressionType = $map['CompressionType'];
        }
        if (isset($map['JSON'])) {
            $model->json = JSONInput::fromMap($map['JSON']);
        }

        return $model;
    }
}
