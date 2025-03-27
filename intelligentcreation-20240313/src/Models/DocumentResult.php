<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class DocumentResult extends Model
{
    /**
     * @var DocumentInfo
     */
    public $documentInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'documentInfo' => 'documentInfo',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->documentInfo) {
            $this->documentInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentInfo) {
            $res['documentInfo'] = null !== $this->documentInfo ? $this->documentInfo->toArray($noStream) : $this->documentInfo;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['documentInfo'])) {
            $model->documentInfo = DocumentInfo::fromMap($map['documentInfo']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
