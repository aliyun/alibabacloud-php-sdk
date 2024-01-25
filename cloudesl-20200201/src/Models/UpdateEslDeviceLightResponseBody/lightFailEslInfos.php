<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateEslDeviceLightResponseBody;

use AlibabaCloud\Tea\Model;

class lightFailEslInfos extends Model
{
    /**
     * @example The specified ESL device does not exist.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'eslBarCode'   => 'EslBarCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lightFailEslInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }

        return $model;
    }
}
