<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class GetCatalogsRequest extends Model
{
    /**
     * @example paimon
     *
     * @var string
     */
    public $catalogName;
    protected $_name = [
        'catalogName' => 'catalogName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['catalogName'] = $this->catalogName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCatalogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalogName'])) {
            $model->catalogName = $map['catalogName'];
        }

        return $model;
    }
}
