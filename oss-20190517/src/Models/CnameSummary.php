<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CnameSummary extends Model
{
    /**
     * @var CnameCertificate
     */
    public $certificate;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'certificate'  => 'Certificate',
        'domain'       => 'Domain',
        'lastModified' => 'LastModified',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = null !== $this->certificate ? $this->certificate->toMap() : null;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CnameSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = CnameCertificate::fromMap($map['Certificate']);
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
