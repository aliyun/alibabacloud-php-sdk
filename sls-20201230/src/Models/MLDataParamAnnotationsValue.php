<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class MLDataParamAnnotationsValue extends Model
{
    /**
     * @var string
     */
    public $annotatedBy;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string[][]
     */
    public $results;
    protected $_name = [
        'annotatedBy' => 'annotatedBy',
        'updateTime' => 'updateTime',
        'results' => 'results',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotatedBy) {
            $res['annotatedBy'] = $this->annotatedBy;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    if (\is_array($item1)) {
                        $res['results'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['results'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    if (!empty($item1)) {
                        $model->results[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->results[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
