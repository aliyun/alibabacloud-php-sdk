<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CostCenterSaveRequest extends Model
{
    /**
     * @var string
     */
    public $alipayId;

    /**
     * @var string
     */
    public $alipayNo;

    /**
     * @var string
     */
    public $corpId;

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

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alipayId'    => 'alipay_id',
        'alipayNo'    => 'alipay_no',
        'corpId'      => 'corp_id',
        'number'      => 'number',
        'scope'       => 'scope',
        'thirdpartId' => 'thirdpart_id',
        'title'       => 'title',
        'userId'      => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayId) {
            $res['alipay_id'] = $this->alipayId;
        }
        if (null !== $this->alipayNo) {
            $res['alipay_no'] = $this->alipayNo;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
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
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CostCenterSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alipay_id'])) {
            $model->alipayId = $map['alipay_id'];
        }
        if (isset($map['alipay_no'])) {
            $model->alipayNo = $map['alipay_no'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
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
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
