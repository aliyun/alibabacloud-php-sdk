<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList\typeData\date;
use AlibabaCloud\Tea\Model;

class typeData extends Model
{
    /**
     * @example VUL_VUL
     *
     * @var string
     */
    public $code;

    /**
     * @var date[]
     */
    public $date;

    /**
     * @example 25
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->date) {
            $res['Date'] = [];
            if (null !== $this->date && \is_array($this->date)) {
                $n = 0;
                foreach ($this->date as $item) {
                    $res['Date'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return typeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Date'])) {
            if (!empty($map['Date'])) {
                $model->date = [];
                $n = 0;
                foreach ($map['Date'] as $item) {
                    $model->date[$n++] = null !== $item ? date::fromMap($item) : $item;
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
