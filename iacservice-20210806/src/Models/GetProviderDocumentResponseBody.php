<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetProviderDocumentResponseBody extends Model
{
    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $providerVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $terraformResourceType;
    protected $_name = [
        'document' => 'document',
        'providerVersion' => 'providerVersion',
        'requestId' => 'requestId',
        'terraformResourceType' => 'terraformResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->providerVersion) {
            $res['providerVersion'] = $this->providerVersion;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->terraformResourceType) {
            $res['terraformResourceType'] = $this->terraformResourceType;
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
        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['providerVersion'])) {
            $model->providerVersion = $map['providerVersion'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['terraformResourceType'])) {
            $model->terraformResourceType = $map['terraformResourceType'];
        }

        return $model;
    }
}
