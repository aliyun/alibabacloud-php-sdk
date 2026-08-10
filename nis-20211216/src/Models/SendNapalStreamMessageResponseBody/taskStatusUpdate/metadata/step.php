<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\metadata;

use AlibabaCloud\Dara\Model;

class step extends Model
{
    /**
     * @var int
     */
    public $costTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isError;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $params;

    /**
     * @var mixed
     */
    public $result;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $uiContent;
    protected $_name = [
        'costTime' => 'CostTime',
        'id' => 'Id',
        'isError' => 'IsError',
        'name' => 'Name',
        'params' => 'Params',
        'result' => 'Result',
        'retryCount' => 'RetryCount',
        'uiContent' => 'UiContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isError) {
            $res['IsError'] = $this->isError;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->uiContent) {
            $res['UiContent'] = $this->uiContent;
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
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsError'])) {
            $model->isError = $map['IsError'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['UiContent'])) {
            $model->uiContent = $map['UiContent'];
        }

        return $model;
    }
}
