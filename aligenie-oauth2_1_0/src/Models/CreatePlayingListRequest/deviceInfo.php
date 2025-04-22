<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\CreatePlayingListRequest;

use AlibabaCloud\Dara\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $encodeKey;

    /**
     * @var string
     */
    public $encodeType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'encodeKey' => 'EncodeKey',
        'encodeType' => 'EncodeType',
        'id' => 'Id',
        'idType' => 'IdType',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }

        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }

        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
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
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }

        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
