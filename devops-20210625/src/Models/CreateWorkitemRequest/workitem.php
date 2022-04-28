<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest;

use AlibabaCloud\Tea\Model;

class workitem extends Model
{
    /**
     * @description 抄送人account id列表
     *
     * @var string[]
     */
    public $tracker;

    /**
     * @description 验证者account id列表，或者企业名称列表
     *
     * @var string[]
     */
    public $verifier;
    protected $_name = [
        'tracker'  => 'tracker',
        'verifier' => 'verifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tracker) {
            $res['tracker'] = $this->tracker;
        }
        if (null !== $this->verifier) {
            $res['verifier'] = $this->verifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tracker'])) {
            if (!empty($map['tracker'])) {
                $model->tracker = $map['tracker'];
            }
        }
        if (isset($map['verifier'])) {
            if (!empty($map['verifier'])) {
                $model->verifier = $map['verifier'];
            }
        }

        return $model;
    }
}
