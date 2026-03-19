<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListEventRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $termContent;

    /**
     * @var string
     */
    public $termType;
    protected $_name = [
        'beginTime' => 'beginTime',
        'endTime' => 'endTime',
        'page' => 'page',
        'size' => 'size',
        'termContent' => 'termContent',
        'termType' => 'termType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->termContent) {
            $res['termContent'] = $this->termContent;
        }

        if (null !== $this->termType) {
            $res['termType'] = $this->termType;
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
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['termContent'])) {
            $model->termContent = $map['termContent'];
        }

        if (isset($map['termType'])) {
            $model->termType = $map['termType'];
        }

        return $model;
    }
}
