<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetMqttTicketShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientOS;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $propertiesShrink;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientOS' => 'ClientOS',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'propertiesShrink' => 'Properties',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->propertiesShrink) {
            $res['Properties'] = $this->propertiesShrink;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['Properties'])) {
            $model->propertiesShrink = $map['Properties'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
