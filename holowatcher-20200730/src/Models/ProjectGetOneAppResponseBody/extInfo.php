<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetOneAppResponseBody;

use AlibabaCloud\Tea\Model;

class extInfo extends Model
{
    /**
     * @var string
     */
    public $FLOORPLANAREA;

    /**
     * @var string
     */
    public $ONLINEDNS;

    /**
     * @var string
     */
    public $STATUS;
    protected $_name = [
        'FLOORPLANAREA' => 'FLOORPLANAREA',
        'ONLINEDNS'     => 'ONLINEDNS',
        'STATUS'        => 'STATUS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FLOORPLANAREA) {
            $res['FLOORPLANAREA'] = $this->FLOORPLANAREA;
        }
        if (null !== $this->ONLINEDNS) {
            $res['ONLINEDNS'] = $this->ONLINEDNS;
        }
        if (null !== $this->STATUS) {
            $res['STATUS'] = $this->STATUS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FLOORPLANAREA'])) {
            $model->FLOORPLANAREA = $map['FLOORPLANAREA'];
        }
        if (isset($map['ONLINEDNS'])) {
            $model->ONLINEDNS = $map['ONLINEDNS'];
        }
        if (isset($map['STATUS'])) {
            $model->STATUS = $map['STATUS'];
        }

        return $model;
    }
}
