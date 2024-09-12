<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\RerankResponseBody\results;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $document;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example 2.31412
     *
     * @var float
     */
    public $relevanceScore;
    protected $_name = [
        'document'       => 'Document',
        'index'          => 'Index',
        'relevanceScore' => 'RelevanceScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->document) {
            $res['Document'] = $this->document;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->relevanceScore) {
            $res['RelevanceScore'] = $this->relevanceScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Document'])) {
            $model->document = $map['Document'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['RelevanceScore'])) {
            $model->relevanceScore = $map['RelevanceScore'];
        }

        return $model;
    }
}
