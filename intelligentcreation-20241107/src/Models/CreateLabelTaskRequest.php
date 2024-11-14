<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20241107\Models;

use AlibabaCloud\Tea\Model;

class CreateLabelTaskRequest extends Model
{
    /**
     * @example oss://test/test
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 7caa09aa60204086909ba3958810a567
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @example 1_for_7_label_v1
     *
     * @var string
     */
    public $labelTemplateId;
    protected $_name = [
        'fileUrl'         => 'fileUrl',
        'idempotentId'    => 'idempotentId',
        'labelTemplateId' => 'labelTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }
        if (null !== $this->labelTemplateId) {
            $res['labelTemplateId'] = $this->labelTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLabelTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }
        if (isset($map['labelTemplateId'])) {
            $model->labelTemplateId = $map['labelTemplateId'];
        }

        return $model;
    }
}
