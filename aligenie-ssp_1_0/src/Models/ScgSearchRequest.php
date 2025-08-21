<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter;

class ScgSearchRequest extends Model
{
    /**
     * @var scgFilter
     */
    public $scgFilter;

    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'scgFilter' => 'ScgFilter',
        'topicId' => 'TopicId',
    ];

    public function validate()
    {
        if (null !== $this->scgFilter) {
            $this->scgFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scgFilter) {
            $res['ScgFilter'] = null !== $this->scgFilter ? $this->scgFilter->toArray($noStream) : $this->scgFilter;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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
        if (isset($map['ScgFilter'])) {
            $model->scgFilter = scgFilter::fromMap($map['ScgFilter']);
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
