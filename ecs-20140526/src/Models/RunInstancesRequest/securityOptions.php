<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class securityOptions extends Model
{
    /**
     * @description The confidential computing mode. Set the value to Enclave.
     *
     * A value of Enclave indicates that an enclave-based confidential computing environment is built on the instance. When you call the `RunInstances` operation, you can set this parameter only for c7, g7, or r7 instances to use enclave-based confidential computing. Take note of the following items:
     *
     *   The confidential computing feature is in invitational preview. To use this feature, submit a ticket.
     *   When you use the ECS API to create instances that support enclave-based confidential computing, you can call only the `RunInstances` operation. The `CreateInstance` operation does not support the `SecurityOptions.ConfidentialComputingMode` parameter.
     *   Enclave-based confidential computing is implemented based on the Alibaba Cloud trusted system (vTPM). When you build a confidential computing environment on an instance by using Enclave, the Alibaba Cloud trusted system is enabled for the instance. Therefore, if you set `SecurityOptions.ConfidentialComputingMode` to Enclave when you call this operation, the created instances use enclave-based confidential computing and the Alibaba Cloud trusted system regardless of whether `SecurityOptions.TrustedSystemMode` is set to vTPM.
     *
     * For more information about confidential computing, see [Build a confidential computing environment by using Enclave](~~203433~~).
     * @example Enclave
     *
     * @var string
     */
    public $confidentialComputingMode;

    /**
     * @description The trusted system mode. Set the value to vTPM.
     *
     * The trusted system mode supports the following instance families:
     *
     *   g7, c7, and r7
     *   Security-enhanced instance families: g7t, c7t, and r7t
     *
     * When you create instances of the preceding instance families, you must set this parameter. Take note of the following items:
     *
     *   To use the Alibaba Cloud trusted system, set this parameter to vTPM. Then, the Alibaba Cloud trusted system performs trust verifications when the instances start.
     *   If you do not want to use the Alibaba Cloud trusted system, leave this parameter empty. Note that if your created instances use an enclave-based confidential computing environment (with `SecurityOptions.ConfidentialComputingMode` set to Enclave), the Alibaba Cloud trusted system is enabled for the instances.
     *   When you use the ECS API to create instances that use the trusted system, you can call only the `RunInstances` operation. The `CreateInstance` operation does not support the `SecurityOptions.TrustedSystemMode` parameter.
     *
     * For more information about the trusted system, see [Overview](~~201394~~).
     * @example vTPM
     *
     * @var string
     */
    public $trustedSystemMode;
    protected $_name = [
        'confidentialComputingMode' => 'ConfidentialComputingMode',
        'trustedSystemMode'         => 'TrustedSystemMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidentialComputingMode) {
            $res['ConfidentialComputingMode'] = $this->confidentialComputingMode;
        }
        if (null !== $this->trustedSystemMode) {
            $res['TrustedSystemMode'] = $this->trustedSystemMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfidentialComputingMode'])) {
            $model->confidentialComputingMode = $map['ConfidentialComputingMode'];
        }
        if (isset($map['TrustedSystemMode'])) {
            $model->trustedSystemMode = $map['TrustedSystemMode'];
        }

        return $model;
    }
}
