<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions\keyUsage;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions\subjectAlternativeNames;

class extensions extends Model
{
    /**
     * @var string[]
     */
    public $criticals;
    /**
     * @var string[]
     */
    public $extendedKeyUsages;
    /**
     * @var keyUsage
     */
    public $keyUsage;
    /**
     * @var subjectAlternativeNames[]
     */
    public $subjectAlternativeNames;
    protected $_name = [
        'criticals'               => 'Criticals',
        'extendedKeyUsages'       => 'ExtendedKeyUsages',
        'keyUsage'                => 'KeyUsage',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
    ];

    public function validate()
    {
        if (\is_array($this->criticals)) {
            Model::validateArray($this->criticals);
        }
        if (\is_array($this->extendedKeyUsages)) {
            Model::validateArray($this->extendedKeyUsages);
        }
        if (null !== $this->keyUsage) {
            $this->keyUsage->validate();
        }
        if (\is_array($this->subjectAlternativeNames)) {
            Model::validateArray($this->subjectAlternativeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criticals) {
            if (\is_array($this->criticals)) {
                $res['Criticals'] = [];
                $n1               = 0;
                foreach ($this->criticals as $item1) {
                    $res['Criticals'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->extendedKeyUsages) {
            if (\is_array($this->extendedKeyUsages)) {
                $res['ExtendedKeyUsages'] = [];
                $n1                       = 0;
                foreach ($this->extendedKeyUsages as $item1) {
                    $res['ExtendedKeyUsages'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = null !== $this->keyUsage ? $this->keyUsage->toArray($noStream) : $this->keyUsage;
        }

        if (null !== $this->subjectAlternativeNames) {
            if (\is_array($this->subjectAlternativeNames)) {
                $res['SubjectAlternativeNames'] = [];
                $n1                             = 0;
                foreach ($this->subjectAlternativeNames as $item1) {
                    $res['SubjectAlternativeNames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Criticals'])) {
            if (!empty($map['Criticals'])) {
                $model->criticals = [];
                $n1               = 0;
                foreach ($map['Criticals'] as $item1) {
                    $model->criticals[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExtendedKeyUsages'])) {
            if (!empty($map['ExtendedKeyUsages'])) {
                $model->extendedKeyUsages = [];
                $n1                       = 0;
                foreach ($map['ExtendedKeyUsages'] as $item1) {
                    $model->extendedKeyUsages[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeyUsage'])) {
            $model->keyUsage = keyUsage::fromMap($map['KeyUsage']);
        }

        if (isset($map['SubjectAlternativeNames'])) {
            if (!empty($map['SubjectAlternativeNames'])) {
                $model->subjectAlternativeNames = [];
                $n1                             = 0;
                foreach ($map['SubjectAlternativeNames'] as $item1) {
                    $model->subjectAlternativeNames[$n1++] = subjectAlternativeNames::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
