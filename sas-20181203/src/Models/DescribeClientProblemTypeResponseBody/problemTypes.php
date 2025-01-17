<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientProblemTypeResponseBody;

use AlibabaCloud\Dara\Model;

class problemTypes extends Model
{
    /**
     * @var string
     */
    public $problemDetail;
    /**
     * @var string
     */
    public $problemId;
    /**
     * @var string
     */
    public $problemType;
    protected $_name = [
        'problemDetail' => 'problemDetail',
        'problemId'     => 'problemId',
        'problemType'   => 'problemType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->problemDetail) {
            $res['problemDetail'] = $this->problemDetail;
        }

        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        if (null !== $this->problemType) {
            $res['problemType'] = $this->problemType;
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
        if (isset($map['problemDetail'])) {
            $model->problemDetail = $map['problemDetail'];
        }

        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        if (isset($map['problemType'])) {
            $model->problemType = $map['problemType'];
        }

        return $model;
    }
}
