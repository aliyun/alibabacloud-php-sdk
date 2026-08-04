<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterGetMemberBalanceLogsRequest extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $skipTotal;
    protected $_name = [
        'changeType' => 'changeType',
        'page' => 'page',
        'size' => 'size',
        'skipTotal' => 'skipTotal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['changeType'] = $this->changeType;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->skipTotal) {
            $res['skipTotal'] = $this->skipTotal;
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
        if (isset($map['changeType'])) {
            $model->changeType = $map['changeType'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['skipTotal'])) {
            $model->skipTotal = $map['skipTotal'];
        }

        return $model;
    }
}
