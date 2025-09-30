<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\multiCollectionRecallResult\matches;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var int
     */
    public $source;
    protected $_name = [
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
