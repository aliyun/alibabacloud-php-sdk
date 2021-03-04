<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListCertificatesResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListCertificatesResponseBody\certificateSummaryList\certificateSummary;
use AlibabaCloud\Tea\Model;

class certificateSummaryList extends Model
{
    /**
     * @var certificateSummary[]
     */
    public $certificateSummary;
    protected $_name = [
        'certificateSummary' => 'CertificateSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateSummary) {
            $res['CertificateSummary'] = [];
            if (null !== $this->certificateSummary && \is_array($this->certificateSummary)) {
                $n = 0;
                foreach ($this->certificateSummary as $item) {
                    $res['CertificateSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateSummary'])) {
            if (!empty($map['CertificateSummary'])) {
                $model->certificateSummary = [];
                $n                         = 0;
                foreach ($map['CertificateSummary'] as $item) {
                    $model->certificateSummary[$n++] = null !== $item ? certificateSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
