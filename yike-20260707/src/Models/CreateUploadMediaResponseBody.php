<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateUploadMediaResponseBody\uploadCredentials;

class CreateUploadMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $ticketExpiration;

    /**
     * @var uploadCredentials
     */
    public $uploadCredentials;

    /**
     * @var string
     */
    public $uploadTicket;
    protected $_name = [
        'fileURL' => 'FileURL',
        'mediaId' => 'MediaId',
        'objectKey' => 'ObjectKey',
        'requestId' => 'RequestId',
        'storageLocation' => 'StorageLocation',
        'ticketExpiration' => 'TicketExpiration',
        'uploadCredentials' => 'UploadCredentials',
        'uploadTicket' => 'UploadTicket',
    ];

    public function validate()
    {
        if (null !== $this->uploadCredentials) {
            $this->uploadCredentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->ticketExpiration) {
            $res['TicketExpiration'] = $this->ticketExpiration;
        }

        if (null !== $this->uploadCredentials) {
            $res['UploadCredentials'] = null !== $this->uploadCredentials ? $this->uploadCredentials->toArray($noStream) : $this->uploadCredentials;
        }

        if (null !== $this->uploadTicket) {
            $res['UploadTicket'] = $this->uploadTicket;
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['TicketExpiration'])) {
            $model->ticketExpiration = $map['TicketExpiration'];
        }

        if (isset($map['UploadCredentials'])) {
            $model->uploadCredentials = uploadCredentials::fromMap($map['UploadCredentials']);
        }

        if (isset($map['UploadTicket'])) {
            $model->uploadTicket = $map['UploadTicket'];
        }

        return $model;
    }
}
