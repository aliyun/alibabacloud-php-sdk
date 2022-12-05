<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class QueryBarrelImageListRequest extends Model
{
    /**
     * @var string
     */
    public $barrel;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startId;
    protected $_name = [
        'barrel'   => 'Barrel',
        'pageSize' => 'PageSize',
        'startId'  => 'StartId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->barrel) {
            $res['Barrel'] = $this->barrel;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startId) {
            $res['StartId'] = $this->startId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBarrelImageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Barrel'])) {
            $model->barrel = $map['Barrel'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartId'])) {
            $model->startId = $map['StartId'];
        }

        return $model;
    }
}
