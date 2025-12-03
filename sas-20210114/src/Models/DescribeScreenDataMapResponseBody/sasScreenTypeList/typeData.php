<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList\typeData\date;

class typeData extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var date[]
     */
    public $date;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'code' => 'Code',
        'date' => 'Date',
        'id' => 'Id',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->date)) {
            Model::validateArray($this->date);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->date) {
            if (\is_array($this->date)) {
                $res['Date'] = [];
                $n1 = 0;
                foreach ($this->date as $item1) {
                    $res['Date'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Date'])) {
            if (!empty($map['Date'])) {
                $model->date = [];
                $n1 = 0;
                foreach ($map['Date'] as $item1) {
                    $model->date[$n1] = date::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
