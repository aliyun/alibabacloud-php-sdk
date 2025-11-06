<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class QueryTaskListRequest extends Model
{
    /**
     * @var int
     */
    public $beginCreateTime;

    /**
     * @var int
     */
    public $endCreateTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'beginCreateTime' => 'BeginCreateTime',
        'endCreateTime' => 'EndCreateTime',
        'lang' => 'Lang',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginCreateTime) {
            $res['BeginCreateTime'] = $this->beginCreateTime;
        }

        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['BeginCreateTime'])) {
            $model->beginCreateTime = $map['BeginCreateTime'];
        }

        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
