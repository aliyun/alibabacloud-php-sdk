<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models;

use AlibabaCloud\Dara\Model;

class ValidateTestFileRequest extends Model
{
    /**
     * @var string
     */
    public $customerModuleId;

    /**
     * @var string
     */
    public $filePath;
    protected $_name = [
        'customerModuleId' => 'CustomerModuleId',
        'filePath' => 'FilePath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerModuleId) {
            $res['CustomerModuleId'] = $this->customerModuleId;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
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
        if (isset($map['CustomerModuleId'])) {
            $model->customerModuleId = $map['CustomerModuleId'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        return $model;
    }
}
