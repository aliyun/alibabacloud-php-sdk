<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class UploadDocumentRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $documentFileUrl;

    /**
     * @var string
     */
    public $documentData;
    protected $_name = [
        'projectId'       => 'ProjectId',
        'documentFileUrl' => 'DocumentFileUrl',
        'documentData'    => 'DocumentData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->documentFileUrl) {
            $res['DocumentFileUrl'] = $this->documentFileUrl;
        }
        if (null !== $this->documentData) {
            $res['DocumentData'] = $this->documentData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DocumentFileUrl'])) {
            $model->documentFileUrl = $map['DocumentFileUrl'];
        }
        if (isset($map['DocumentData'])) {
            $model->documentData = $map['DocumentData'];
        }

        return $model;
    }
}
