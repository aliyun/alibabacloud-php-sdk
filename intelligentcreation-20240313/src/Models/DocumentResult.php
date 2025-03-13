<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class DocumentResult extends Model
{
    /**
     * @var DocumentInfo
     */
    public $documentInfo;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'documentInfo' => 'documentInfo',
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentInfo) {
            $res['documentInfo'] = null !== $this->documentInfo ? $this->documentInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DocumentResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentInfo'])) {
            $model->documentInfo = DocumentInfo::fromMap($map['documentInfo']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
