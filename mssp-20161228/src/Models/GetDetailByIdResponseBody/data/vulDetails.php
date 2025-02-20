<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDetailByIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class vulDetails extends Model
{
    /**
     * @var string
     */
    public $cveId;
    /**
     * @var string
     */
    public $cvssScore;
    /**
     * @var string
     */
    public $fixSuggestion;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'cveId'         => 'CveId',
        'cvssScore'     => 'CvssScore',
        'fixSuggestion' => 'FixSuggestion',
        'title'         => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }

        if (null !== $this->cvssScore) {
            $res['CvssScore'] = $this->cvssScore;
        }

        if (null !== $this->fixSuggestion) {
            $res['FixSuggestion'] = $this->fixSuggestion;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }

        if (isset($map['CvssScore'])) {
            $model->cvssScore = $map['CvssScore'];
        }

        if (isset($map['FixSuggestion'])) {
            $model->fixSuggestion = $map['FixSuggestion'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
