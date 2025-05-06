<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult\caseDomain;

class caseResult extends Model
{
    /**
     * @var caseDomain
     */
    public $caseDomain;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $similarity;
    protected $_name = [
        'caseDomain' => 'caseDomain',
        'mode' => 'mode',
        'similarity' => 'similarity',
    ];

    public function validate()
    {
        if (null !== $this->caseDomain) {
            $this->caseDomain->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caseDomain) {
            $res['caseDomain'] = null !== $this->caseDomain ? $this->caseDomain->toArray($noStream) : $this->caseDomain;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
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
        if (isset($map['caseDomain'])) {
            $model->caseDomain = caseDomain::fromMap($map['caseDomain']);
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['similarity'])) {
            $model->similarity = $map['similarity'];
        }

        return $model;
    }
}
