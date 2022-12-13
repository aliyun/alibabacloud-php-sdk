<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 113
     *
     * @var int
     */
    public $allFinish;

    /**
     * @example 12
     *
     * @var int
     */
    public $allResponse;

    /**
     * @example 11
     *
     * @var int
     */
    public $myFinish;

    /**
     * @example 1
     *
     * @var int
     */
    public $myResponse;
    protected $_name = [
        'allFinish'   => 'allFinish',
        'allResponse' => 'allResponse',
        'myFinish'    => 'myFinish',
        'myResponse'  => 'myResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allFinish) {
            $res['allFinish'] = $this->allFinish;
        }
        if (null !== $this->allResponse) {
            $res['allResponse'] = $this->allResponse;
        }
        if (null !== $this->myFinish) {
            $res['myFinish'] = $this->myFinish;
        }
        if (null !== $this->myResponse) {
            $res['myResponse'] = $this->myResponse;
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
        if (isset($map['allFinish'])) {
            $model->allFinish = $map['allFinish'];
        }
        if (isset($map['allResponse'])) {
            $model->allResponse = $map['allResponse'];
        }
        if (isset($map['myFinish'])) {
            $model->myFinish = $map['myFinish'];
        }
        if (isset($map['myResponse'])) {
            $model->myResponse = $map['myResponse'];
        }

        return $model;
    }
}
