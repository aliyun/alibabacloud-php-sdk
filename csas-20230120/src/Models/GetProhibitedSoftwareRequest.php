<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareRequest\softwareId;

class GetProhibitedSoftwareRequest extends Model
{
    /**
     * @var softwareId
     */
    public $softwareId;
    protected $_name = [
        'softwareId' => 'SoftwareId',
    ];

    public function validate()
    {
        if (null !== $this->softwareId) {
            $this->softwareId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = null !== $this->softwareId ? $this->softwareId->toArray($noStream) : $this->softwareId;
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
        if (isset($map['SoftwareId'])) {
            $model->softwareId = softwareId::fromMap($map['SoftwareId']);
        }

        return $model;
    }
}
