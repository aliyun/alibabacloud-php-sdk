<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ResultImportMessageResultValue;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var ResultImportMessageResultValue[]
     */
    public $importMessageResult;
    protected $_name = [
        'importMessageResult' => 'ImportMessageResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importMessageResult) {
            $res['ImportMessageResult'] = [];
            if (null !== $this->importMessageResult && \is_array($this->importMessageResult)) {
                foreach ($this->importMessageResult as $key => $val) {
                    $res['ImportMessageResult'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportMessageResult'])) {
            $model->importMessageResult = $map['ImportMessageResult'];
        }

        return $model;
    }
}
