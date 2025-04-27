<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Dara\Model;

class FindIdpListByLoginIdentifierRequest extends Model
{
    /**
     * @var string[]
     */
    public $availableFeatures;

    /**
     * @var string
     */
    public $clientChannel;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientOS;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $loginIdentifier;

    /**
     * @var string[]
     */
    public $supportTypes;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'availableFeatures' => 'AvailableFeatures',
        'clientChannel' => 'ClientChannel',
        'clientId' => 'ClientId',
        'clientIp' => 'ClientIp',
        'clientOS' => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'loginIdentifier' => 'LoginIdentifier',
        'supportTypes' => 'SupportTypes',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->availableFeatures)) {
            Model::validateArray($this->availableFeatures);
        }
        if (\is_array($this->supportTypes)) {
            Model::validateArray($this->supportTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableFeatures) {
            if (\is_array($this->availableFeatures)) {
                $res['AvailableFeatures'] = [];
                foreach ($this->availableFeatures as $key1 => $value1) {
                    $res['AvailableFeatures'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->clientChannel) {
            $res['ClientChannel'] = $this->clientChannel;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->loginIdentifier) {
            $res['LoginIdentifier'] = $this->loginIdentifier;
        }

        if (null !== $this->supportTypes) {
            if (\is_array($this->supportTypes)) {
                $res['SupportTypes'] = [];
                $n1 = 0;
                foreach ($this->supportTypes as $item1) {
                    $res['SupportTypes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AvailableFeatures'])) {
            if (!empty($map['AvailableFeatures'])) {
                $model->availableFeatures = [];
                foreach ($map['AvailableFeatures'] as $key1 => $value1) {
                    $model->availableFeatures[$key1] = $value1;
                }
            }
        }

        if (isset($map['ClientChannel'])) {
            $model->clientChannel = $map['ClientChannel'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['LoginIdentifier'])) {
            $model->loginIdentifier = $map['LoginIdentifier'];
        }

        if (isset($map['SupportTypes'])) {
            if (!empty($map['SupportTypes'])) {
                $model->supportTypes = [];
                $n1 = 0;
                foreach ($map['SupportTypes'] as $item1) {
                    $model->supportTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
