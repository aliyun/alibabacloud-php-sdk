<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials\qualificationCredential;

class credentials extends Model
{
    /**
     * @var qualificationCredential[]
     */
    public $qualificationCredential;
    protected $_name = [
        'qualificationCredential' => 'QualificationCredential',
    ];

    public function validate()
    {
        if (\is_array($this->qualificationCredential)) {
            Model::validateArray($this->qualificationCredential);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualificationCredential) {
            if (\is_array($this->qualificationCredential)) {
                $res['QualificationCredential'] = [];
                $n1 = 0;
                foreach ($this->qualificationCredential as $item1) {
                    $res['QualificationCredential'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['QualificationCredential'])) {
            if (!empty($map['QualificationCredential'])) {
                $model->qualificationCredential = [];
                $n1 = 0;
                foreach ($map['QualificationCredential'] as $item1) {
                    $model->qualificationCredential[$n1] = qualificationCredential::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
