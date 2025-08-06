<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPersonalStorageListResponseBody\storageInfoList;

use AlibabaCloud\Dara\Model;

class storageInfo extends Model
{
    /**
     * @var string
     */
    public $extranetEndpoint;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $storageACL;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'extranetEndpoint' => 'ExtranetEndpoint',
        'gmtCreate' => 'GmtCreate',
        'intranetEndpoint' => 'IntranetEndpoint',
        'location' => 'Location',
        'ownerId' => 'OwnerId',
        'storageACL' => 'StorageACL',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extranetEndpoint) {
            $res['ExtranetEndpoint'] = $this->extranetEndpoint;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->storageACL) {
            $res['StorageACL'] = $this->storageACL;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['ExtranetEndpoint'])) {
            $model->extranetEndpoint = $map['ExtranetEndpoint'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['StorageACL'])) {
            $model->storageACL = $map['StorageACL'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
