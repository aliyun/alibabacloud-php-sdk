<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class ListDataSourcesRequest extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var mixed[]
     */
    public $filter;
    protected $_name = [
        'attributeName' => 'attributeName',
        'filter' => 'filter',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['attributeName'] = $this->attributeName;
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['filter'] = [];
                foreach ($this->filter as $key1 => $value1) {
                    $res['filter'][$key1] = $value1;
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
        if (isset($map['attributeName'])) {
            $model->attributeName = $map['attributeName'];
        }

        if (isset($map['filter'])) {
            if (!empty($map['filter'])) {
                $model->filter = [];
                foreach ($map['filter'] as $key1 => $value1) {
                    $model->filter[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
