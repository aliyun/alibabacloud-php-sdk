<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableBindDetailResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableBindDetailResponseBody\resultObject\params;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableBindDetailResponseBody\resultObject\relationRules;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var bool
     */
    public $allowModify;

    /**
     * @var int
     */
    public $defineId;

    /**
     * @var string
     */
    public $defineTitle;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var params[]
     */
    public $params;

    /**
     * @var relationRules[]
     */
    public $relationRules;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'allowModify'   => 'allowModify',
        'defineId'      => 'defineId',
        'defineTitle'   => 'defineTitle',
        'description'   => 'description',
        'eventCode'     => 'eventCode',
        'id'            => 'id',
        'params'        => 'params',
        'relationRules' => 'relationRules',
        'title'         => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowModify) {
            $res['allowModify'] = $this->allowModify;
        }
        if (null !== $this->defineId) {
            $res['defineId'] = $this->defineId;
        }
        if (null !== $this->defineTitle) {
            $res['defineTitle'] = $this->defineTitle;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->params) {
            $res['params'] = [];
            if (null !== $this->params && \is_array($this->params)) {
                $n = 0;
                foreach ($this->params as $item) {
                    $res['params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationRules) {
            $res['relationRules'] = [];
            if (null !== $this->relationRules && \is_array($this->relationRules)) {
                $n = 0;
                foreach ($this->relationRules as $item) {
                    $res['relationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowModify'])) {
            $model->allowModify = $map['allowModify'];
        }
        if (isset($map['defineId'])) {
            $model->defineId = $map['defineId'];
        }
        if (isset($map['defineTitle'])) {
            $model->defineTitle = $map['defineTitle'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                $n             = 0;
                foreach ($map['params'] as $item) {
                    $model->params[$n++] = null !== $item ? params::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relationRules'])) {
            if (!empty($map['relationRules'])) {
                $model->relationRules = [];
                $n                    = 0;
                foreach ($map['relationRules'] as $item) {
                    $model->relationRules[$n++] = null !== $item ? relationRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
