<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class vlResult extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $vlContent;
    protected $_name = [
        'success' => 'Success',
        'vlContent' => 'VlContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->vlContent) {
            $res['VlContent'] = $this->vlContent;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['VlContent'])) {
            $model->vlContent = $map['VlContent'];
        }

        return $model;
    }
}
