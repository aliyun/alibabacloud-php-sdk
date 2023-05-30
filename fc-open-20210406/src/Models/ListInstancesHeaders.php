<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description Queries the available instances of a function.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;
    protected $_name = [
        'xFcAccountId' => 'X-Fc-Account-Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcAccountId) {
            $res['X-Fc-Account-Id'] = $this->xFcAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['X-Fc-Account-Id'])) {
            $model->xFcAccountId = $map['X-Fc-Account-Id'];
        }

        return $model;
    }
}
