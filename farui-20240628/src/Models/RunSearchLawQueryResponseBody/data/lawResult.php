<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\lawResult\lawDomain;
use AlibabaCloud\Tea\Model;

class lawResult extends Model
{
    /**
     * @var lawDomain
     */
    public $lawDomain;

    /**
     * @example 0.0050
     *
     * @var string
     */
    public $similarity;
    protected $_name = [
        'lawDomain'  => 'lawDomain',
        'similarity' => 'similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lawDomain) {
            $res['lawDomain'] = null !== $this->lawDomain ? $this->lawDomain->toMap() : null;
        }
        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lawResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lawDomain'])) {
            $model->lawDomain = lawDomain::fromMap($map['lawDomain']);
        }
        if (isset($map['similarity'])) {
            $model->similarity = $map['similarity'];
        }

        return $model;
    }
}
