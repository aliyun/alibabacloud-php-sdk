<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CostCenterModifyRequest extends Model
{
    /**
     * @example a@alipay.com
     *
     * @var string
     */
    public $alipayNo;

    /**
     * @example 12345
     *
     * @var string
     */
    public $number;

    /**
     * @example 1
     *
     * @var int
     */
    public $scope;

    /**
     * @example 340049
     *
     * @var string
     */
    public $thirdpartId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'alipayNo'    => 'alipay_no',
        'number'      => 'number',
        'scope'       => 'scope',
        'thirdpartId' => 'thirdpart_id',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayNo) {
            $res['alipay_no'] = $this->alipayNo;
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

    /**
     * @param array $map
     *
     * @return CostCenterModifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alipay_no'])) {
            $model->alipayNo = $map['alipay_no'];
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
