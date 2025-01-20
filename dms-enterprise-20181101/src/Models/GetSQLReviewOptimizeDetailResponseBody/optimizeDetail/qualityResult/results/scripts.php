<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult\results;

use AlibabaCloud\Dara\Model;

class scripts extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $opType;
    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'content'   => 'Content',
        'opType'    => 'OpType',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
