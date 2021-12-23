<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeHttpTriggerConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $customDomain;

    /**
     * @var string
     */
    public $customDomainCertificateInfo;

    /**
     * @var string
     */
    public $customDomainCname;

    /**
     * @var string
     */
    public $defaultEndpoint;

    /**
     * @var bool
     */
    public $enableService;

    /**
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
