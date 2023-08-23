<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter;
use AlibabaCloud\Tea\Model;

class ScgSearchRequest extends Model
{
    /**
     * @var scgFilter
     */
    public $scgFilter;

    /**
     * @example MC201132
     *
     * @var string
     */
    public $topicId;
    protected $_name = [
        'scgFilter' => 'ScgFilter',
        'topicId'   => 'TopicId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scgFilter) {
            $res['ScgFilter'] = null !== $this->scgFilter ? $this->scgFilter->toMap() : null;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScgSearchRequest
     */
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
