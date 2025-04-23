<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode;

use AlibabaCloud\Dara\Model;

class serviceStatus extends Model
{
    /**
     * @var int
     */
    public $donePercent;

    /**
     * @var int
     */
    public $doneSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'donePercent' => 'donePercent',
        'doneSize' => 'doneSize',
        'name' => 'name',
        'totalSize' => 'totalSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->donePercent) {
            $res['donePercent'] = $this->donePercent;
        }

        if (null !== $this->doneSize) {
            $res['doneSize'] = $this->doneSize;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
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
        if (isset($map['donePercent'])) {
            $model->donePercent = $map['donePercent'];
        }

        if (isset($map['doneSize'])) {
            $model->doneSize = $map['doneSize'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }

        return $model;
    }
}
