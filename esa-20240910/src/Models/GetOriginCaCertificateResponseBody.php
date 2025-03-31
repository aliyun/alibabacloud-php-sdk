<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginCaCertificateResponseBody\result;

class GetOriginCaCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'certificate' => 'Certificate',
        'requestId' => 'RequestId',
        'result' => 'Result',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
