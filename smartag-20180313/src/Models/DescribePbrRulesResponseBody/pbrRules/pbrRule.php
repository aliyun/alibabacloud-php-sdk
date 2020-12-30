<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrRulesResponseBody\pbrRules;

use AlibabaCloud\Tea\Model;

class pbrRule extends Model
{
    /**
     * @var string
     */
    public $dstCidr;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $pbrRuleId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var string
     */
    public $srcCidr;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $srcPort;
    protected $_name = [
        'dstCidr'     => 'DstCidr',
        'description' => 'Description',
        'pbrRuleId'   => 'PbrRuleId',
        'protocol'    => 'Protocol',
        'dstPort'     => 'DstPort',
        'srcCidr'     => 'SrcCidr',
        'name'        => 'Name',
        'srcPort'     => 'SrcPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstCidr) {
            $res['DstCidr'] = $this->dstCidr;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pbrRuleId) {
            $res['PbrRuleId'] = $this->pbrRuleId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->srcCidr) {
            $res['SrcCidr'] = $this->srcCidr;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pbrRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidr'])) {
            $model->dstCidr = $map['DstCidr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PbrRuleId'])) {
            $model->pbrRuleId = $map['PbrRuleId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['SrcCidr'])) {
            $model->srcCidr = $map['SrcCidr'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }

        return $model;
    }
}
