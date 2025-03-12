<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileUploadLimitResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The QPS limit on the files uploaded from the client.
     *
     * @example 100
     *
     * @var string
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
     * @return data
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
