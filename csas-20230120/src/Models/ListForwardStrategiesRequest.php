<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListForwardStrategiesRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $destinationIds;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string[]
     */
    public $forwardIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'destinationIds' => 'DestinationIds',
        'destinationType' => 'DestinationType',
        'forwardIds' => 'ForwardIds',
        'name' => 'Name',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->destinationIds)) {
            Model::validateArray($this->destinationIds);
        }
        if (\is_array($this->forwardIds)) {
            Model::validateArray($this->forwardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->destinationIds) {
            if (\is_array($this->destinationIds)) {
                $res['DestinationIds'] = [];
                $n1 = 0;
                foreach ($this->destinationIds as $item1) {
                    $res['DestinationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->forwardIds) {
            if (\is_array($this->forwardIds)) {
                $res['ForwardIds'] = [];
                $n1 = 0;
                foreach ($this->forwardIds as $item1) {
                    $res['ForwardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DestinationIds'])) {
            if (!empty($map['DestinationIds'])) {
                $model->destinationIds = [];
                $n1 = 0;
                foreach ($map['DestinationIds'] as $item1) {
                    $model->destinationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['ForwardIds'])) {
            if (!empty($map['ForwardIds'])) {
                $model->forwardIds = [];
                $n1 = 0;
                foreach ($map['ForwardIds'] as $item1) {
                    $model->forwardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
