<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesRequest extends Model
{
    /**
     * @description Deletes one or more mezzanine files at a time.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The operation that you want to perform. Set the value to **DeleteMezzanines**.
     *
     * @example 23ab850b4f654b6e91d24d8157****,93ab850b4f6f4b6e91d24d81d4****
     *
     * @var string
     */
    public $videoIds;
    protected $_name = [
        'force'    => 'Force',
        'videoIds' => 'VideoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMezzaninesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }

        return $model;
    }
}
