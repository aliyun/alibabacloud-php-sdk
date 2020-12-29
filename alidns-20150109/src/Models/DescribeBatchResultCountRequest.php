<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $batchType;
    protected $_name = [
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
        'taskId'       => 'TaskId',
        'batchType'    => 'BatchType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchResultCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }

        return $model;
    }
}
