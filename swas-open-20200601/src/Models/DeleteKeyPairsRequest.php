<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class DeleteKeyPairsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string[]
     */
    public $keyPairNames;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'keyPairNames' => 'KeyPairNames',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->keyPairNames)) {
            Model::validateArray($this->keyPairNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->keyPairNames) {
            if (\is_array($this->keyPairNames)) {
                $res['KeyPairNames'] = [];
                $n1                  = 0;
                foreach ($this->keyPairNames as $item1) {
                    $res['KeyPairNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['KeyPairNames'])) {
            if (!empty($map['KeyPairNames'])) {
                $model->keyPairNames = [];
                $n1                  = 0;
                foreach ($map['KeyPairNames'] as $item1) {
                    $model->keyPairNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
