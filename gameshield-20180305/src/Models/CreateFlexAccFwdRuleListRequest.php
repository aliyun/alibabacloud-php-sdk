<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class CreateFlexAccFwdRuleListRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $fwdRuleList;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'bizId'       => 'BizId',
        'fwdRuleList' => 'FwdRuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->fwdRuleList) {
            $res['FwdRuleList'] = $this->fwdRuleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlexAccFwdRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FwdRuleList'])) {
            $model->fwdRuleList = $map['FwdRuleList'];
        }

        return $model;
    }
}
