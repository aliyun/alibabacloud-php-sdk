<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetStorageDomainRoutingRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var RouteItem[]
     */
    public $routes;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'requestId' => 'RequestId',
        'routes' => 'Routes',
        'ruleId' => 'RuleId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['Routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['Routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['Routes'] as $item1) {
                    $model->routes[$n1] = RouteItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
