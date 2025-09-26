<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Gateway extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $internetUrl;

    /**
     * @var string
     */
    public $intranetUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'gatewayId' => 'gatewayId',
        'internetUrl' => 'internetUrl',
        'intranetUrl' => 'intranetUrl',
        'name' => 'name',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->internetUrl) {
            $res['internetUrl'] = $this->internetUrl;
        }

        if (null !== $this->intranetUrl) {
            $res['intranetUrl'] = $this->intranetUrl;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['internetUrl'])) {
            $model->internetUrl = $map['internetUrl'];
        }

        if (isset($map['intranetUrl'])) {
            $model->intranetUrl = $map['intranetUrl'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
