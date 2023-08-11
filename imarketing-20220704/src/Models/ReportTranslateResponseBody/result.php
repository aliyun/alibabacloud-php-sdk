<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 9885db29-3406-456f-8160-2b8dfc42c1df
     *
     * @var string
     */
    public $bidid;

    /**
     * @description success
     *
     * @example True
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'bidid'   => 'Bidid',
        'success' => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bidid) {
            $res['Bidid'] = $this->bidid;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Bidid'])) {
            $model->bidid = $map['Bidid'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
