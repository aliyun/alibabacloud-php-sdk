<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\AsyncSqlResponseData\asyncSqlMetaPB;

class AsyncSqlResponseData extends Model
{
    /**
     * @var asyncSqlMetaPB
     */
    public $asyncSqlMetaPB;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[][]
     */
    public $rows;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'asyncSqlMetaPB' => 'AsyncSqlMetaPB',
        'errorCode' => 'error_code',
        'errorMessage' => 'error_message',
        'id' => 'id',
        'rows' => 'rows',
        'state' => 'state',
    ];

    public function validate()
    {
        if (null !== $this->asyncSqlMetaPB) {
            $this->asyncSqlMetaPB->validate();
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncSqlMetaPB) {
            $res['AsyncSqlMetaPB'] = null !== $this->asyncSqlMetaPB ? $this->asyncSqlMetaPB->toArray($noStream) : $this->asyncSqlMetaPB;
        }

        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    if (\is_array($item1)) {
                        $res['rows'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['rows'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['AsyncSqlMetaPB'])) {
            $model->asyncSqlMetaPB = asyncSqlMetaPB::fromMap($map['AsyncSqlMetaPB']);
        }

        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }

        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['rows'])) {
            if (!empty($map['rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['rows'] as $item1) {
                    if (!empty($item1)) {
                        $model->rows[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->rows[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
