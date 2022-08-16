<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class KdtreeOption extends Model
{
    /**
     * @var int
     */
    public $compressionLevel;

    /**
     * @var string
     */
    public $libraryName;

    /**
     * @var int
     */
    public $quantizationBits;
    protected $_name = [
        'compressionLevel' => 'CompressionLevel',
        'libraryName'      => 'LibraryName',
        'quantizationBits' => 'QuantizationBits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressionLevel) {
            $res['CompressionLevel'] = $this->compressionLevel;
        }
        if (null !== $this->libraryName) {
            $res['LibraryName'] = $this->libraryName;
        }
        if (null !== $this->quantizationBits) {
            $res['QuantizationBits'] = $this->quantizationBits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KdtreeOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompressionLevel'])) {
            $model->compressionLevel = $map['CompressionLevel'];
        }
        if (isset($map['LibraryName'])) {
            $model->libraryName = $map['LibraryName'];
        }
        if (isset($map['QuantizationBits'])) {
            $model->quantizationBits = $map['QuantizationBits'];
        }

        return $model;
    }
}
