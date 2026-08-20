<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class GetProhibitedSoftwareShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $softwareIdShrink;
    protected $_name = [
        'softwareIdShrink' => 'SoftwareId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->softwareIdShrink) {
            $res['SoftwareId'] = $this->softwareIdShrink;
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
            $model->softwareIdShrink = $map['SoftwareId'];
        }

        return $model;
    }
}
