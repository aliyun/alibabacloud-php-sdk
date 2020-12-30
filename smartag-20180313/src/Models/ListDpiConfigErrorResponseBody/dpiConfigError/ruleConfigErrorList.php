<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody\dpiConfigError;

use AlibabaCloud\Tea\Model;

class ruleConfigErrorList extends Model
{
    /**
     * @var string[]
     */
    public $dpiSignatureIds;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string[]
     */
    public $dpiGroupIds;
    protected $_name = [
        'dpiSignatureIds' => 'DpiSignatureIds',
        'ruleId'          => 'RuleId',
        'dpiGroupIds'     => 'DpiGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = $this->dpiSignatureIds;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->dpiGroupIds) {
            $res['DpiGroupIds'] = $this->dpiGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConfigErrorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DpiSignatureIds'])) {
            if (!empty($map['DpiSignatureIds'])) {
                $model->dpiSignatureIds = $map['DpiSignatureIds'];
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['DpiGroupIds'])) {
            if (!empty($map['DpiGroupIds'])) {
                $model->dpiGroupIds = $map['DpiGroupIds'];
            }
        }

        return $model;
    }
}
