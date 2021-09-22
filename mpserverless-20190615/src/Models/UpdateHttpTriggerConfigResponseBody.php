<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpTriggerConfigResponseBody extends Model
{
    /**
     * @var bool
     */
    public $enableService;

    /**
     * @var string
     */
    public $customDomainCname;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $defaultEndpoint;

    /**
     * @var string
     */
    public $customDomainCertificateInfo;

    /**
     * @var string
     */
    public $customDomain;
    protected $_name = [
        'enableService'               => 'EnableService',
        'customDomainCname'           => 'CustomDomainCname',
        'requestId'                   => 'RequestId',
        'defaultEndpoint'             => 'DefaultEndpoint',
        'customDomainCertificateInfo' => 'CustomDomainCertificateInfo',
        'customDomain'                => 'CustomDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableService) {
            $res['EnableService'] = $this->enableService;
        }
        if (null !== $this->customDomainCname) {
            $res['CustomDomainCname'] = $this->customDomainCname;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = $this->defaultEndpoint;
        }
        if (null !== $this->customDomainCertificateInfo) {
            $res['CustomDomainCertificateInfo'] = $this->customDomainCertificateInfo;
        }
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = $this->customDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpTriggerConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableService'])) {
            $model->enableService = $map['EnableService'];
        }
        if (isset($map['CustomDomainCname'])) {
            $model->customDomainCname = $map['CustomDomainCname'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = $map['DefaultEndpoint'];
        }
        if (isset($map['CustomDomainCertificateInfo'])) {
            $model->customDomainCertificateInfo = $map['CustomDomainCertificateInfo'];
        }
        if (isset($map['CustomDomain'])) {
            $model->customDomain = $map['CustomDomain'];
        }

        return $model;
    }
}
