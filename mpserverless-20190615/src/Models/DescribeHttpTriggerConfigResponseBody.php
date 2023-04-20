<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeHttpTriggerConfigResponseBody extends Model
{
    /**
     * @example abc.example.com
     *
     * @var string
     */
    public $customDomain;

    /**
     * @example {"notAfter":"2021-09-28T08:21:42Z","notBefore":"2021-06-30T08:21:43Z","subject":"CN=*.example.com"}
     *
     * @var string
     */
    public $customDomainCertificateInfo;

    /**
     * @example 724d************795a2.custom.bspapp.com
     *
     * @var string
     */
    public $customDomainCname;

    /**
     * @example 724dade5-492f-426b-a5df-ff****0795a2.bspapp.com
     *
     * @var string
     */
    public $defaultEndpoint;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableService;

    /**
     * @example 4555773F-769B-4960-87E6-16009E5A4844
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customDomain'                => 'CustomDomain',
        'customDomainCertificateInfo' => 'CustomDomainCertificateInfo',
        'customDomainCname'           => 'CustomDomainCname',
        'defaultEndpoint'             => 'DefaultEndpoint',
        'enableService'               => 'EnableService',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = $this->customDomain;
        }
        if (null !== $this->customDomainCertificateInfo) {
            $res['CustomDomainCertificateInfo'] = $this->customDomainCertificateInfo;
        }
        if (null !== $this->customDomainCname) {
            $res['CustomDomainCname'] = $this->customDomainCname;
        }
        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = $this->defaultEndpoint;
        }
        if (null !== $this->enableService) {
            $res['EnableService'] = $this->enableService;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHttpTriggerConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomDomain'])) {
            $model->customDomain = $map['CustomDomain'];
        }
        if (isset($map['CustomDomainCertificateInfo'])) {
            $model->customDomainCertificateInfo = $map['CustomDomainCertificateInfo'];
        }
        if (isset($map['CustomDomainCname'])) {
            $model->customDomainCname = $map['CustomDomainCname'];
        }
        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = $map['DefaultEndpoint'];
        }
        if (isset($map['EnableService'])) {
            $model->enableService = $map['EnableService'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
