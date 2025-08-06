<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DescribeFileIdPlayStatisByEdgeRequest extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scrollToken;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'ownerId' => 'OwnerId',
        'pageSize' => 'PageSize',
        'scrollToken' => 'ScrollToken',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
