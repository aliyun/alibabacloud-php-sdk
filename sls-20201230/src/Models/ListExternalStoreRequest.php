<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListExternalStoreRequest extends Model
{
    /**
     * @var string
     */
    public $externalStoreName;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $sizs;
    protected $_name = [
        'externalStoreName' => 'externalStoreName',
        'offset'            => 'offset',
        'sizs'              => 'sizs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalStoreName) {
            $res['externalStoreName'] = $this->externalStoreName;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->sizs) {
            $res['sizs'] = $this->sizs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExternalStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['externalStoreName'])) {
            $model->externalStoreName = $map['externalStoreName'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['sizs'])) {
            $model->sizs = $map['sizs'];
        }

        return $model;
    }
}
