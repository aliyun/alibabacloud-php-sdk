<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateLastRangeNewResponseBody\list_;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateLastRangeNewResponseBody\tags;

class QueryDigitalTemplateLastRangeNewResponseBody extends Model
{
    /**
     * @var list_
     */
    public $list;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'list' => 'List',
        'requestId' => 'RequestId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->list) {
            $this->list->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
