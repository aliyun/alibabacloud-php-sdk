<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SetTransferCalleePoolConfigRequest;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The called number.
     *
     * This parameter is required.
     * @example 151****0000
     *
     * @var string
     */
    public $called;

    /**
     * @description The calling number.
     *
     * @example 150****0000
     *
     * @var string
     */
    public $caller;
    protected $_name = [
        'called' => 'Called',
        'caller' => 'Caller',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        return $model;
    }
}
