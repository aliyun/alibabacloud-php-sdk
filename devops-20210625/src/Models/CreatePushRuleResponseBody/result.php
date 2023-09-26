<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleResponseBody\result\ruleInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2023-09-03T18:20:06+08:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-09-03T18:20:06+08:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 2077
     *
     * @var int
     */
    public $id;

    /**
     * @var ruleInfos[]
     */
    public $ruleInfos;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id'          => 'id',
        'ruleInfos'   => 'ruleInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        return $model;
    }
}
