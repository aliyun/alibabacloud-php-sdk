<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportPreCheckResultResponseBody\preCheckResult\subCheckItems\subCheckItems;

use AlibabaCloud\Tea\Model;

class errorMsgParams extends Model
{
    /**
     * @var string[]
     */
    public $errorMsgParams;
    protected $_name = [
        'errorMsgParams' => 'ErrorMsgParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsgParams) {
            $res['ErrorMsgParams'] = $this->errorMsgParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorMsgParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsgParams'])) {
            if (!empty($map['ErrorMsgParams'])) {
                $model->errorMsgParams = $map['ErrorMsgParams'];
            }
        }

        return $model;
    }
}
