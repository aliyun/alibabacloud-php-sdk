<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAgentsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $authMode;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $isActive;

    /**
     * @var string
     */
    public $operatingObjectName;
    protected $_name = [
        'authMode' => 'authMode',
        'displayName' => 'displayName',
        'isActive' => 'isActive',
        'operatingObjectName' => 'operatingObjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMode) {
            $res['authMode'] = $this->authMode;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
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
        if (isset($map['authMode'])) {
            $model->authMode = $map['authMode'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        return $model;
    }
}
