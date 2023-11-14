<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateFileUploadLimitRequest extends Model
{
    /**
     * @description The QPS limit on the files uploaded from the client. Valid values: 100 to 10000.
     *
     * @example 100
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'limit' => 'Limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileUploadLimitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
