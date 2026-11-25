<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class UpdateEvaluatorVersionStatusRequest extends Model
{
    /**
     * @var string
     */
    public $expectedStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'expectedStatus' => 'expectedStatus',
        'status' => 'status',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectedStatus) {
            $res['expectedStatus'] = $this->expectedStatus;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
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
        if (isset($map['expectedStatus'])) {
            $model->expectedStatus = $map['expectedStatus'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        return $model;
    }
}
