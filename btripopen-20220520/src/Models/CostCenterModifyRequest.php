<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class CostCenterModifyRequest extends Model
{
    /**
     * @var string
     */
    public $alipayNo;

    /**
     * @var int
     */
    public $disable;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $scope;

    /**
     * @var string
     */
    public $thirdpartId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'alipayNo' => 'alipay_no',
        'disable' => 'disable',
        'number' => 'number',
        'scope' => 'scope',
        'thirdpartId' => 'thirdpart_id',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alipayNo) {
            $res['alipay_no'] = $this->alipayNo;
        }

        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }

        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['alipay_no'])) {
            $model->alipayNo = $map['alipay_no'];
        }

        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }

        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
