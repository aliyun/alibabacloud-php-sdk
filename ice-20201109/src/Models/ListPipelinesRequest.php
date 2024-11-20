<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListPipelinesRequest extends Model
{
    /**
     * @description The type of the MPS queue.
     *
     * Valid values:
     *
     *   Boost: MPS queue with transcoding speed boosted.
     *   Standard: standard MPS queue.
     *   NarrowBandHDV2: MPS queue that supports Narrowband HD 2.0.
     *
     * @example Standard
     *
     * @var string
     */
    public $speed;
    protected $_name = [
        'speed' => 'Speed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        return $model;
    }
}
