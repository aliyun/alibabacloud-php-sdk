<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponseBody\result\certificateApplications;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var certificateApplications[]
     */
    public $certificateApplications;
    protected $_name = [
        'pagination'              => 'Pagination',
        'certificateApplications' => 'CertificateApplications',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->certificateApplications) {
            $res['CertificateApplications'] = [];
            if (null !== $this->certificateApplications && \is_array($this->certificateApplications)) {
                $n = 0;
                foreach ($this->certificateApplications as $item) {
                    $res['CertificateApplications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['CertificateApplications'])) {
            if (!empty($map['CertificateApplications'])) {
                $model->certificateApplications = [];
                $n                              = 0;
                foreach ($map['CertificateApplications'] as $item) {
                    $model->certificateApplications[$n++] = null !== $item ? certificateApplications::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
