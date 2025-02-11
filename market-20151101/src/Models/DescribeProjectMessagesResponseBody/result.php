<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectMessagesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $operator;
    /**
     * @var string
     */
    public $operatorName;
    /**
     * @var string
     */
    public $operatorRole;
    protected $_name = [
        'content'      => 'Content',
        'gmtCreate'    => 'GmtCreate',
        'operator'     => 'Operator',
        'operatorName' => 'OperatorName',
        'operatorRole' => 'OperatorRole',
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        if (null !== $this->operatorRole) {
            $res['OperatorRole'] = $this->operatorRole;
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        if (isset($map['OperatorRole'])) {
            $model->operatorRole = $map['OperatorRole'];
        }

        return $model;
    }
}
