<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeQosRulesRequest extends Model
{
    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $qosRuleName;
    protected $_name = [
        'networkPackageId' => 'NetworkPackageId',
        'qosRuleName' => 'QosRuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }

        if (null !== $this->qosRuleName) {
            $res['QosRuleName'] = $this->qosRuleName;
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
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }

        if (isset($map['QosRuleName'])) {
            $model->qosRuleName = $map['QosRuleName'];
        }

        return $model;
    }
}
