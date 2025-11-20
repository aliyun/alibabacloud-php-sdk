<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CopyDentryByNodeIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $dentryUuid;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'contentType' => 'contentType',
        'createdTime' => 'createdTime',
        'dentryUuid' => 'dentryUuid',
        'extension' => 'extension',
        'requestId' => 'requestId',
        'spaceId' => 'spaceId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->dentryUuid) {
            $res['dentryUuid'] = $this->dentryUuid;
        }

        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->spaceId) {
            $res['spaceId'] = $this->spaceId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['dentryUuid'])) {
            $model->dentryUuid = $map['dentryUuid'];
        }

        if (isset($map['extension'])) {
            $model->extension = $map['extension'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['spaceId'])) {
            $model->spaceId = $map['spaceId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
