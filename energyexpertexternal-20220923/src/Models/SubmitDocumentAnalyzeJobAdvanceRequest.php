<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitDocumentAnalyzeJobAdvanceRequest extends Model
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
     * @var Stream
     */
    public $fileUrlObject;

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
        'fileName'      => 'fileName',
        'fileUrlObject' => 'fileUrl',
        'folderId'      => 'folderId',
        'templateId'    => 'templateId',
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
        if (null !== $this->fileUrlObject) {
            $res['fileUrl'] = $this->fileUrlObject;
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
     * @return SubmitDocumentAnalyzeJobAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileUrl'])) {
            $model->fileUrlObject = $map['fileUrl'];
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
