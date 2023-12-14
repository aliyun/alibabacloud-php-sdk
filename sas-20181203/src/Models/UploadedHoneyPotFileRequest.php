<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UploadedHoneyPotFileRequest extends Model
{
    /**
     * @description The file key that you use to upload the file.
     *
     * >  The key is in the format of HONEYPOT_FILE/{Timestamp}\_{Custom file name}.
     * @example HONEYPOT_FILE/1601097845544644_********
     *
     * @var string
     */
    public $fileKey;

    /**
     * @description The name of the file that you want to upload.
     *
     * @example trojan.zip
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file type.
     *
     * @example application/zip
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The name of the honeypot image.
     *
     * @example ruoyi
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the management node to which the honeypot belongs.
     *
     * >  You can call the [ListHoneypotNode](~~ListHoneypotNode~~) operation to obtain the IDs of management nodes. operation to query the management node ID.
     * @example cc427e14-f257-4670-9d2b-d83bbbe*****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The prompt template that corresponds to the file.
     *
     * @example {\"help\":\".zip\",\"label\":\"file\",\"type\":\"file\",\"key\":\"ftpfiles.zip\"}
     *
     * @var string
     */
    public $templateExtra;
    protected $_name = [
        'fileKey'           => 'FileKey',
        'fileName'          => 'FileName',
        'fileType'          => 'FileType',
        'honeypotImageName' => 'HoneypotImageName',
        'lang'              => 'Lang',
        'nodeId'            => 'NodeId',
        'templateExtra'     => 'TemplateExtra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->templateExtra) {
            $res['TemplateExtra'] = $this->templateExtra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadedHoneyPotFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TemplateExtra'])) {
            $model->templateExtra = $map['TemplateExtra'];
        }

        return $model;
    }
}
