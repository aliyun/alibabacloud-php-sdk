<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetHistogramsRequest extends Model
{
    /**
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @example * and status: 401
     *
     * @var string
     */
    public $query;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1409569200
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from'     => 'From',
        'query'    => 'Query',
        'regionId' => 'RegionId',
        'to'       => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHistogramsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
