<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryRequest;

use AlibabaCloud\Tea\Model;

class repoPath extends Model
{
    /**
     * @example term
     *
     * @var string
     */
    public $matchType;

    /**
     * @example equal
     *
     * @var string
     */
    public $operatorType;

    /**
     * @example orgId/test-group/spring-boot-demo
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'matchType'    => 'matchType',
        'operatorType' => 'operatorType',
        'value'        => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }
        if (null !== $this->operatorType) {
            $res['operatorType'] = $this->operatorType;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repoPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }
        if (isset($map['operatorType'])) {
            $model->operatorType = $map['operatorType'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
