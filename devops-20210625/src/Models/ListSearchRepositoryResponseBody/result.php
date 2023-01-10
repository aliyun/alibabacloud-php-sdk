<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponseBody\result\highlightTextMap;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponseBody\result\source;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 60d54f3daccf2bbd6659f3ad/gitlabhq/master/config/environments/test.rb
     *
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
        'docId'            => 'docId',
        'highlightTextMap' => 'highlightTextMap',
        'source'           => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->highlightTextMap) {
            $res['highlightTextMap'] = null !== $this->highlightTextMap ? $this->highlightTextMap->toMap() : null;
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
