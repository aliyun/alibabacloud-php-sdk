<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
