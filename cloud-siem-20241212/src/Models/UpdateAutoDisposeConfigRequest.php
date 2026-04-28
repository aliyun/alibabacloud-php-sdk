<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoDisposeConfigRequest extends Model
{
    /**
     * @var string
     */
    public $autoDecisionStatus;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'autoDecisionStatus' => 'AutoDecisionStatus',
        'lang' => 'Lang',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDecisionStatus) {
            $res['AutoDecisionStatus'] = $this->autoDecisionStatus;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['AutoDecisionStatus'])) {
            $model->autoDecisionStatus = $map['AutoDecisionStatus'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
