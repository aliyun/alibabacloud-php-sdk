<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListTopicsRequest extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var string[]
     */
    public $messageTypes;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'filter' => 'filter',
        'messageTypes' => 'messageTypes',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        if (\is_array($this->messageTypes)) {
            Model::validateArray($this->messageTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }

        if (null !== $this->messageTypes) {
            if (\is_array($this->messageTypes)) {
                $res['messageTypes'] = [];
                $n1 = 0;
                foreach ($this->messageTypes as $item1) {
                    $res['messageTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        if (isset($map['messageTypes'])) {
            if (!empty($map['messageTypes'])) {
                $model->messageTypes = [];
                $n1 = 0;
                foreach ($map['messageTypes'] as $item1) {
                    $model->messageTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
