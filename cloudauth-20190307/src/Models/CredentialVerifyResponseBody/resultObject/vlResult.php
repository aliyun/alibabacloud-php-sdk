<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponseBody\resultObject;

use AlibabaCloud\Tea\Model;

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
        'success'   => 'Success',
        'vlContent' => 'VlContent',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return vlResult
     */
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
