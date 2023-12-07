<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmGrafanaDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $queryGrafanaData;
    protected $_name = [
        'queryGrafanaData' => 'QueryGrafanaData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryGrafanaData) {
            $res['QueryGrafanaData'] = $this->queryGrafanaData;
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
        if (isset($map['QueryGrafanaData'])) {
            $model->queryGrafanaData = $map['QueryGrafanaData'];
        }

        return $model;
    }
}
