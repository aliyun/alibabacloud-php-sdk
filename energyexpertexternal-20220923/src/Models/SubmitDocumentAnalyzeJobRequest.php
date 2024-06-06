<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class SubmitDocumentAnalyzeJobRequest extends Model
{
    /**
     * @example https://example.com/example.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example folderCode
     *
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @description This parameter is required.
     *
     * @example templateCode
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'fileUrl'    => 'fileUrl',
        'folderId'   => 'folderId',
        'ossUrl'     => 'ossUrl',
        'templateId' => 'templateId',
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
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }
        if (null !== $this->ossUrl) {
            $res['ossUrl'] = $this->ossUrl;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDocumentAnalyzeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }
        if (isset($map['ossUrl'])) {
            $model->ossUrl = $map['ossUrl'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
