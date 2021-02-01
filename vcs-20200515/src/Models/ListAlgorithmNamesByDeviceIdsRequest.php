<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListAlgorithmNamesByDeviceIdsRequest extends Model
{
    /**
     * @var string
     */
    public $gbIds;
    protected $_name = [
        'gbIds' => 'GbIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbIds) {
            $res['GbIds'] = $this->gbIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlgorithmNamesByDeviceIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GbIds'])) {
            $model->gbIds = $map['GbIds'];
        }

        return $model;
    }
}
