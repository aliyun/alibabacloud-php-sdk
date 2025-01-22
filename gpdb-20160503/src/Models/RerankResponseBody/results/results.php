<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\RerankResponseBody\results;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $document;
    /**
     * @var int
     */
    public $index;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
