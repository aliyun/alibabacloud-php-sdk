<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Tea\Model;

class extraParams extends Model
{
    /**
     * @var bool
     */
    public $nfixEnabled;
    protected $_name = [
        'nfixEnabled' => 'NfixEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nfixEnabled) {
            $res['NfixEnabled'] = $this->nfixEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NfixEnabled'])) {
            $model->nfixEnabled = $map['NfixEnabled'];
        }

        return $model;
    }
}
