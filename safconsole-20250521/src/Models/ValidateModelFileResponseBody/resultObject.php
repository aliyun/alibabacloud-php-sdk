<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\ValidateModelFileResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var bool
     */
    public $fileValid;
    protected $_name = [
        'fileValid' => 'FileValid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileValid) {
            $res['FileValid'] = $this->fileValid;
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
        if (isset($map['FileValid'])) {
            $model->fileValid = $map['FileValid'];
        }

        return $model;
    }
}
