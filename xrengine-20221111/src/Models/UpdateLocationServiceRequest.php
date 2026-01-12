<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class UpdateLocationServiceRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $svcName;

    /**
     * @var string
     */
    public $svcState;
    protected $_name = [
        'id' => 'Id',
        'jwtToken' => 'JwtToken',
        'note' => 'Note',
        'qps' => 'Qps',
        'svcName' => 'SvcName',
        'svcState' => 'SvcState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }

        if (null !== $this->svcName) {
            $res['SvcName'] = $this->svcName;
        }

        if (null !== $this->svcState) {
            $res['SvcState'] = $this->svcState;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }

        if (isset($map['SvcName'])) {
            $model->svcName = $map['SvcName'];
        }

        if (isset($map['SvcState'])) {
            $model->svcState = $map['SvcState'];
        }

        return $model;
    }
}
