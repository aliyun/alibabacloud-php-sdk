<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreatePersonalDingtalkMeetingRequest extends Model
{
    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $roomCode;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'credentialId' => 'credentialId',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'name' => 'name',
        'notes' => 'notes',
        'operatingObjectName' => 'operatingObjectName',
        'roomCode' => 'roomCode',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notes) {
            $res['notes'] = $this->notes;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notes'])) {
            $model->notes = $map['notes'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['roomCode'])) {
            $model->roomCode = $map['roomCode'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
