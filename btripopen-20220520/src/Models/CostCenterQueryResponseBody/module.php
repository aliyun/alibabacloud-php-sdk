<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponseBody\module\entityDOS;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example a@alipay.com
     *
     * @var string
     */
    public $alipayNo;

    /**
     * @example ding12345678
     *
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $disable;

    /**
     * @var entityDOS[]
     */
    public $entityDOS;

    /**
     * @example 7232
     *
     * @var int
     */
    public $id;

    /**
     * @example 123456
     *
     * @var string
     */
    public $number;

    /**
     * @description rule code
     *
     * @example 500578154
     *
     * @var int
     */
    public $ruleCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $scope;

    /**
     * @example 1
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
        'corpId'      => 'corp_id',
        'disable'     => 'disable',
        'entityDOS'   => 'entity_d_o_s',
        'id'          => 'id',
        'number'      => 'number',
        'ruleCode'    => 'rule_code',
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
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }
        if (null !== $this->entityDOS) {
            $res['entity_d_o_s'] = [];
            if (null !== $this->entityDOS && \is_array($this->entityDOS)) {
                $n = 0;
                foreach ($this->entityDOS as $item) {
                    $res['entity_d_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->ruleCode) {
            $res['rule_code'] = $this->ruleCode;
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
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alipay_no'])) {
            $model->alipayNo = $map['alipay_no'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }
        if (isset($map['entity_d_o_s'])) {
            if (!empty($map['entity_d_o_s'])) {
                $model->entityDOS = [];
                $n                = 0;
                foreach ($map['entity_d_o_s'] as $item) {
                    $model->entityDOS[$n++] = null !== $item ? entityDOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }
        if (isset($map['rule_code'])) {
            $model->ruleCode = $map['rule_code'];
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
