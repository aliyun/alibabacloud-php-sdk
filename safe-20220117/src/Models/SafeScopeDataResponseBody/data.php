<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeScopeDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeScopeDataResponseBody\data\pagination;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var string[]
     */
    public $extraInfo;

    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'data' => 'Data',
        'extraInfo' => 'ExtraInfo',
        'pagination' => 'Pagination',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (null !== $this->pagination) {
            $this->pagination->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toArray($noStream) : $this->pagination;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
