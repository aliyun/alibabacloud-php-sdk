<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class UpdateRunRequest extends Model
{
    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @example myName
     *
     * @var string
     */
    public $name;

    /**
     * @var RunParam[]
     */
    public $params;
    protected $_name = [
        'labels' => 'Labels',
        'name'   => 'Name',
        'params' => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->params) {
            $res['Params'] = [];
            if (null !== $this->params && \is_array($this->params)) {
                $n = 0;
                foreach ($this->params as $item) {
                    $res['Params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n             = 0;
                foreach ($map['Params'] as $item) {
                    $model->params[$n++] = null !== $item ? RunParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
