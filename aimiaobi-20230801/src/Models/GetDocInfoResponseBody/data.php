<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $categoryId;
    /**
     * @var string
     */
    public $docName;
    /**
     * @var string
     */
    public $docType;
    /**
     * @var string
     */
    public $fileUrl;
    /**
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
        if (\is_array($this->videoContents)) {
            Model::validateArray($this->videoContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->videoContents)) {
                $res['VideoContents'] = [];
                $n1                   = 0;
                foreach ($this->videoContents as $item1) {
                    $res['VideoContents'][$n1++] = $item1;
                }
            }
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
                $model->videoContents = [];
                $n1                   = 0;
                foreach ($map['VideoContents'] as $item1) {
                    $model->videoContents[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
