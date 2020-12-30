<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subjectAlternativeName) {
            $res['SubjectAlternativeName'] = $this->subjectAlternativeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subjectAlternativeNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubjectAlternativeName'])) {
            if (!empty($map['SubjectAlternativeName'])) {
                $model->subjectAlternativeName = $map['SubjectAlternativeName'];
            }
        }

        return $model;
    }
}
