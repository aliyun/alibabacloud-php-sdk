<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class AssociateMacSecKeyRequest extends Model
{
    /**
     * @var string
     */
    public $cak;

    /**
     * @var string
     */
    public $cipherSuite;

    /**
     * @var string
     */
    public $ckn;

    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cak' => 'Cak',
        'cipherSuite' => 'CipherSuite',
        'ckn' => 'Ckn',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cak) {
            $res['Cak'] = $this->cak;
        }

        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }

        if (null !== $this->ckn) {
            $res['Ckn'] = $this->ckn;
        }

        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
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
        if (isset($map['Cak'])) {
            $model->cak = $map['Cak'];
        }

        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }

        if (isset($map['Ckn'])) {
            $model->ckn = $map['Ckn'];
        }

        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
