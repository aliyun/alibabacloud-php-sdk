<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsV2ResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsV2ResponseBody\result\certificateApplications;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainCertificateApplicationsV2ResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var certificateApplications[]
     */
    public $certificateApplications;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'certificateApplications' => 'CertificateApplications',
        'pagination'              => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateApplications) {
            $res['CertificateApplications'] = [];
            if (null !== $this->certificateApplications && \is_array($this->certificateApplications)) {
                $n = 0;
                foreach ($this->certificateApplications as $item) {
                    $res['CertificateApplications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
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
        if (isset($map['CertificateApplications'])) {
            if (!empty($map['CertificateApplications'])) {
                $model->certificateApplications = [];
                $n                              = 0;
                foreach ($map['CertificateApplications'] as $item) {
                    $model->certificateApplications[$n++] = null !== $item ? certificateApplications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
