<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GetOptionValueForProjectRequest extends Model
{
    /**
     * @var string
     */
    public $extensionCode;
    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'extensionCode' => 'ExtensionCode',
        'projectId'     => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
