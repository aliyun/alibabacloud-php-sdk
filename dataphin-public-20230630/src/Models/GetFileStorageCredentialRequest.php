<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetFileStorageCredentialRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
