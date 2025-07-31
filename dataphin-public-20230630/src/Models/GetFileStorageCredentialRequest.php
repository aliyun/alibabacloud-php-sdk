<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetFileStorageCredentialRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @example 1030131021
     *
     * @var int
     */
    public $projectId;

    /**
     * @example RESOURCE
     *
     * @var string
     */
    public $purpose;

    /**
     * @var bool
     */
    public $useVpcEndpoint;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'purpose' => 'Purpose',
        'useVpcEndpoint' => 'UseVpcEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->purpose) {
            $res['Purpose'] = $this->purpose;
        }
        if (null !== $this->useVpcEndpoint) {
            $res['UseVpcEndpoint'] = $this->useVpcEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileStorageCredentialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Purpose'])) {
            $model->purpose = $map['Purpose'];
        }
        if (isset($map['UseVpcEndpoint'])) {
            $model->useVpcEndpoint = $map['UseVpcEndpoint'];
        }

        return $model;
    }
}
