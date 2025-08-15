<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListStyleLearningResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aigcResult;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $rewriteResult;

    /**
     * @var string
     */
    public $styleName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'aigcResult' => 'AigcResult',
        'id' => 'Id',
        'rewriteResult' => 'RewriteResult',
        'styleName' => 'StyleName',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aigcResult) {
            $res['AigcResult'] = $this->aigcResult;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->rewriteResult) {
            $res['RewriteResult'] = $this->rewriteResult;
        }

        if (null !== $this->styleName) {
            $res['StyleName'] = $this->styleName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AigcResult'])) {
            $model->aigcResult = $map['AigcResult'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RewriteResult'])) {
            $model->rewriteResult = $map['RewriteResult'];
        }

        if (isset($map['StyleName'])) {
            $model->styleName = $map['StyleName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
