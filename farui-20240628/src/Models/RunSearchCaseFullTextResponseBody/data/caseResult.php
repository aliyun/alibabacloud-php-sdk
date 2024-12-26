<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult\caseDomain;
use AlibabaCloud\Tea\Model;

class caseResult extends Model
{
    /**
     * @var caseDomain
     */
    public $caseDomain;

    /**
     * @example 0.88
     *
     * @var string
     */
    public $similarity;
    protected $_name = [
        'caseDomain' => 'caseDomain',
        'similarity' => 'similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseDomain) {
            $res['caseDomain'] = null !== $this->caseDomain ? $this->caseDomain->toMap() : null;
        }
        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return caseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caseDomain'])) {
            $model->caseDomain = caseDomain::fromMap($map['caseDomain']);
        }
        if (isset($map['similarity'])) {
            $model->similarity = $map['similarity'];
        }

        return $model;
    }
}
