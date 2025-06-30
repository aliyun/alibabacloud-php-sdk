<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponseBody\module\entityDOS;

class module extends Model
{
    /**
     * @var string
     */
    public $alipayNo;

    /**
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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $ruleCode;

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
        'corpId' => 'corp_id',
        'disable' => 'disable',
        'entityDOS' => 'entity_d_o_s',
        'id' => 'id',
        'number' => 'number',
        'ruleCode' => 'rule_code',
        'scope' => 'scope',
        'thirdpartId' => 'thirdpart_id',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->entityDOS)) {
            Model::validateArray($this->entityDOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->entityDOS)) {
                $res['entity_d_o_s'] = [];
                $n1 = 0;
                foreach ($this->entityDOS as $item1) {
                    $res['entity_d_o_s'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }

        if (isset($map['entity_d_o_s'])) {
            if (!empty($map['entity_d_o_s'])) {
                $model->entityDOS = [];
                $n1 = 0;
                foreach ($map['entity_d_o_s'] as $item1) {
                    $model->entityDOS[$n1] = entityDOS::fromMap($item1);
                    ++$n1;
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
