<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ModelFileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'objectName' => 'ObjectName',
        'regId' => 'RegId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
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
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        return $model;
    }
}
