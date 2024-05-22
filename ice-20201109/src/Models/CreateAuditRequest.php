<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateAuditRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [
     * {
     * "MediaId": "93ab850b4f*****b54b6e91d24d81d4",
     * {
     * "MediaId": "f867fbfb58*****8bbab65c4480ae1d",
     * ]
     * @var string
     */
    public $auditContent;
    protected $_name = [
        'auditContent' => 'AuditContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditContent) {
            $res['AuditContent'] = $this->auditContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditContent'])) {
            $model->auditContent = $map['AuditContent'];
        }

        return $model;
    }
}
