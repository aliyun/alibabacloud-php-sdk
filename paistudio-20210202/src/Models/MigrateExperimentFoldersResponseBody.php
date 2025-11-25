<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class MigrateExperimentFoldersResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[][]
     */
    public $folderIdMapping;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'folderIdMapping' => 'FolderIdMapping',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->folderIdMapping)) {
            Model::validateArray($this->folderIdMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->folderIdMapping) {
            if (\is_array($this->folderIdMapping)) {
                $res['FolderIdMapping'] = [];
                foreach ($this->folderIdMapping as $key1 => $value1) {
                    $res['FolderIdMapping'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['FolderIdMapping'])) {
            if (!empty($map['FolderIdMapping'])) {
                $model->folderIdMapping = [];
                foreach ($map['FolderIdMapping'] as $key1 => $value1) {
                    $model->folderIdMapping[$key1] = $value1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
