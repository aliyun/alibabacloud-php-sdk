<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;

use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions\keyUsage;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions\subjectAlternativeNames;
use AlibabaCloud\Tea\Model;

class extensions extends Model
{
    /**
     * @description If it is a necessary parameter, the critical list contains the parameter name.
     *
     * @var string[]
     */
    public $criticals;

    /**
     * @description The extended key usage.
     *
     * @var string[]
     */
    public $extendedKeyUsages;

    /**
     * @description The key usage.
     *
     * @var keyUsage
     */
    public $keyUsage;

    /**
     * @description The aliases of the entities.
     *
     * @var subjectAlternativeNames[]
     */
    public $subjectAlternativeNames;
    protected $_name = [
        'criticals' => 'Criticals',
        'extendedKeyUsages' => 'ExtendedKeyUsages',
        'keyUsage' => 'KeyUsage',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->criticals) {
            $res['Criticals'] = $this->criticals;
        }
        if (null !== $this->extendedKeyUsages) {
            $res['ExtendedKeyUsages'] = $this->extendedKeyUsages;
        }
        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = null !== $this->keyUsage ? $this->keyUsage->toMap() : null;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['SubjectAlternativeNames'] = [];
            if (null !== $this->subjectAlternativeNames && \is_array($this->subjectAlternativeNames)) {
                $n = 0;
                foreach ($this->subjectAlternativeNames as $item) {
                    $res['SubjectAlternativeNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criticals'])) {
            if (!empty($map['Criticals'])) {
                $model->criticals = $map['Criticals'];
            }
        }
        if (isset($map['ExtendedKeyUsages'])) {
            if (!empty($map['ExtendedKeyUsages'])) {
                $model->extendedKeyUsages = $map['ExtendedKeyUsages'];
            }
        }
        if (isset($map['KeyUsage'])) {
            $model->keyUsage = keyUsage::fromMap($map['KeyUsage']);
        }
        if (isset($map['SubjectAlternativeNames'])) {
            if (!empty($map['SubjectAlternativeNames'])) {
                $model->subjectAlternativeNames = [];
                $n = 0;
                foreach ($map['SubjectAlternativeNames'] as $item) {
                    $model->subjectAlternativeNames[$n++] = null !== $item ? subjectAlternativeNames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
