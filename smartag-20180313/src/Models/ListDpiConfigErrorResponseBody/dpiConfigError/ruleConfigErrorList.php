<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiConfigErrorResponseBody\dpiConfigError;

use AlibabaCloud\Dara\Model;

class ruleConfigErrorList extends Model
{
    /**
     * @var string[]
     */
    public $dpiGroupIds;

    /**
     * @var string[]
     */
    public $dpiSignatureIds;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'dpiGroupIds' => 'DpiGroupIds',
        'dpiSignatureIds' => 'DpiSignatureIds',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        if (\is_array($this->dpiGroupIds)) {
            Model::validateArray($this->dpiGroupIds);
        }
        if (\is_array($this->dpiSignatureIds)) {
            Model::validateArray($this->dpiSignatureIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiGroupIds) {
            if (\is_array($this->dpiGroupIds)) {
                $res['DpiGroupIds'] = [];
                $n1 = 0;
                foreach ($this->dpiGroupIds as $item1) {
                    $res['DpiGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dpiSignatureIds) {
            if (\is_array($this->dpiSignatureIds)) {
                $res['DpiSignatureIds'] = [];
                $n1 = 0;
                foreach ($this->dpiSignatureIds as $item1) {
                    $res['DpiSignatureIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['DpiGroupIds'])) {
            if (!empty($map['DpiGroupIds'])) {
                $model->dpiGroupIds = [];
                $n1 = 0;
                foreach ($map['DpiGroupIds'] as $item1) {
                    $model->dpiGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DpiSignatureIds'])) {
            if (!empty($map['DpiSignatureIds'])) {
                $model->dpiSignatureIds = [];
                $n1 = 0;
                foreach ($map['DpiSignatureIds'] as $item1) {
                    $model->dpiSignatureIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
