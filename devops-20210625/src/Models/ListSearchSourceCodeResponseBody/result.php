<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeResponseBody\result\highlightTextMap;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeResponseBody\result\source;

class result extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var highlightTextMap
     */
    public $highlightTextMap;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'docId' => 'docId',
        'highlightTextMap' => 'highlightTextMap',
        'source' => 'source',
    ];

    public function validate()
    {
        if (null !== $this->highlightTextMap) {
            $this->highlightTextMap->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->highlightTextMap) {
            $res['highlightTextMap'] = null !== $this->highlightTextMap ? $this->highlightTextMap->toArray($noStream) : $this->highlightTextMap;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['highlightTextMap'])) {
            $model->highlightTextMap = highlightTextMap::fromMap($map['highlightTextMap']);
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        return $model;
    }
}
