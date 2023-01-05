<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\DetectCardScreenshotResponseBody\data\spoofResult\resultMap;
use AlibabaCloud\Tea\Model;

class spoofResult extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isSpoof;

    /**
     * @var resultMap
     */
    public $resultMap;
    protected $_name = [
        'isSpoof'   => 'IsSpoof',
        'resultMap' => 'ResultMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSpoof) {
            $res['IsSpoof'] = $this->isSpoof;
        }
        if (null !== $this->resultMap) {
            $res['ResultMap'] = null !== $this->resultMap ? $this->resultMap->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spoofResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSpoof'])) {
            $model->isSpoof = $map['IsSpoof'];
        }
        if (isset($map['ResultMap'])) {
            $model->resultMap = resultMap::fromMap($map['ResultMap']);
        }

        return $model;
    }
}
