<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DeleteCertificateRequest extends Model
{
    /**
     * @description The ID of the certificate file.
     *
     * This parameter is required.
     *
     * @example 676303114031776
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the workspace to which the certificate file belongs.
     *
     * @example 106560
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'id' => 'Id',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
