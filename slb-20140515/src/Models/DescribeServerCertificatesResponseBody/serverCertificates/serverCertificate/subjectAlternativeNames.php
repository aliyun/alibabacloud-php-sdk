<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate;

use AlibabaCloud\Dara\Model;

class subjectAlternativeNames extends Model
{
    /**
     * @var string[]
     */
    public $subjectAlternativeName;
    protected $_name = [
        'subjectAlternativeName' => 'SubjectAlternativeName',
    ];

    public function validate()
    {
        if (\is_array($this->subjectAlternativeName)) {
            Model::validateArray($this->subjectAlternativeName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subjectAlternativeName) {
            if (\is_array($this->subjectAlternativeName)) {
                $res['SubjectAlternativeName'] = [];
                $n1 = 0;
                foreach ($this->subjectAlternativeName as $item1) {
                    $res['SubjectAlternativeName'][$n1] = $item1;
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
        if (isset($map['SubjectAlternativeName'])) {
            if (!empty($map['SubjectAlternativeName'])) {
                $model->subjectAlternativeName = [];
                $n1 = 0;
                foreach ($map['SubjectAlternativeName'] as $item1) {
                    $model->subjectAlternativeName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
