<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportResponseBody\datas\data;

class datas extends Model
{
    /**
     * @var data[]
     */
    public $data;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'data'  => 'Data',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1          = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
                $n1          = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1++] = data::fromMap($item1);
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
