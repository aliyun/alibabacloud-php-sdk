<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListIndexRecoverRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $generationId;
    protected $_name = [
        'desc' => 'desc',
        'finishedTime' => 'finishedTime',
        'generationId' => 'generationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->finishedTime) {
            $res['finishedTime'] = $this->finishedTime;
        }

        if (null !== $this->generationId) {
            $res['generationId'] = $this->generationId;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['finishedTime'])) {
            $model->finishedTime = $map['finishedTime'];
        }

        if (isset($map['generationId'])) {
            $model->generationId = $map['generationId'];
        }

        return $model;
    }
}
