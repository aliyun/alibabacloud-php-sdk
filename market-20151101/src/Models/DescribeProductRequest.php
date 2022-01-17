<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeProductRequest extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $queryDraft;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'code'       => 'Code',
        'queryDraft' => 'QueryDraft',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->queryDraft) {
            $res['QueryDraft'] = $this->queryDraft;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['QueryDraft'])) {
            $model->queryDraft = $map['QueryDraft'];
        }

        return $model;
    }
}
