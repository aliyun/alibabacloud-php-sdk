<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\GetSnapshotLinkResponseBody\data;

use AlibabaCloud\Tea\Model;

class ecsList extends Model
{
    /**
     * @example i-bp19mogqud1w1*******
     *
     * @var string
     */
    public $ecsId;
    protected $_name = [
        'ecsId' => 'EcsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }

        return $model;
    }
}
