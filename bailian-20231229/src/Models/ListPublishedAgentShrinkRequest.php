<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class ListPublishedAgentShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $subTypesShrink;
    protected $_name = [
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'subTypesShrink' => 'subTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->subTypesShrink) {
            $res['subTypes'] = $this->subTypesShrink;
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
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['subTypes'])) {
            $model->subTypesShrink = $map['subTypes'];
        }

        return $model;
    }
}
