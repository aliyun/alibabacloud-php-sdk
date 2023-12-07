<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MLDataParamAnnotationsValue extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $annotatedBy;

    /**
     * @example 1694761550
     *
     * @var int
     */
    public $updateTime;

    /**
     * @var string[][]
     */
    public $results;
    protected $_name = [
        'annotatedBy' => 'annotatedBy',
        'updateTime'  => 'updateTime',
        'results'     => 'results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotatedBy) {
            $res['annotatedBy'] = $this->annotatedBy;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->results) {
            $res['results'] = $this->results;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MLDataParamAnnotationsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotatedBy'])) {
            $model->annotatedBy = $map['annotatedBy'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = $map['results'];
            }
        }

        return $model;
    }
}
