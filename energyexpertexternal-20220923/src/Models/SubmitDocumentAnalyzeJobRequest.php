<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class SubmitDocumentAnalyzeJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fileName;

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
     * @description This parameter is required.
     *
     * @example templateCode
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'fileName'   => 'fileName',
        'fileUrl'    => 'fileUrl',
        'folderId'   => 'folderId',
        'templateId' => 'templateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
