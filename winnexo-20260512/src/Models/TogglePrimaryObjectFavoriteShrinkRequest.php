<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class TogglePrimaryObjectFavoriteShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $objectIdsShrink;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'action' => 'action',
        'objectIdsShrink' => 'objectIds',
        'objectType' => 'objectType',
        'operatingObjectName' => 'operatingObjectName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->objectIdsShrink) {
            $res['objectIds'] = $this->objectIdsShrink;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['objectIds'])) {
            $model->objectIdsShrink = $map['objectIds'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
