<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\ListCACertificateLogResponseBody;

use AlibabaCloud\Dara\Model;

class logList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $opType;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'identifier' => 'Identifier',
        'opType' => 'OpType',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        return $model;
    }
}
