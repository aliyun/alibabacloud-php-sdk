<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleRequest\ruleInfos;
use AlibabaCloud\Tea\Model;

class CreatePushRuleRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @var ruleInfos[]
     */
    public $ruleInfos;

    /**
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'ruleInfos'      => 'ruleInfos',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->ruleInfos) {
            $res['ruleInfos'] = [];
            if (null !== $this->ruleInfos && \is_array($this->ruleInfos)) {
                $n = 0;
                foreach ($this->ruleInfos as $item) {
                    $res['ruleInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePushRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['ruleInfos'])) {
            if (!empty($map['ruleInfos'])) {
                $model->ruleInfos = [];
                $n                = 0;
                foreach ($map['ruleInfos'] as $item) {
                    $model->ruleInfos[$n++] = null !== $item ? ruleInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
