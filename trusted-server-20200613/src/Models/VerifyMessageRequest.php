<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class VerifyMessageRequest extends Model
{
    /**
     * @var string
     */
    public $fileData;
    protected $_name = [
        'fileData' => 'FileData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileData) {
            $res['FileData'] = $this->fileData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileData'])) {
            $model->fileData = $map['FileData'];
        }

        return $model;
    }
}
