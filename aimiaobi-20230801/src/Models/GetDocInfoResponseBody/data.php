<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @example pdf
     *
     * @var string
     */
    public $docType;

    /**
     * @example http://xxx/xxx.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string[]
     */
    public $videoContents;
    protected $_name = [
        'categoryId'    => 'CategoryId',
        'docName'       => 'DocName',
        'docType'       => 'DocType',
        'fileUrl'       => 'FileUrl',
        'status'        => 'Status',
        'statusMessage' => 'StatusMessage',
        'videoContents' => 'VideoContents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->videoContents) {
            $res['VideoContents'] = $this->videoContents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['VideoContents'])) {
            if (!empty($map['VideoContents'])) {
                $model->videoContents = $map['VideoContents'];
            }
        }

        return $model;
    }
}
