<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class MigrateExperimentFoldersResponseBody extends Model
{
    /**
     * @example NO_PERMISSION
     *
     * @var string
     */
    public $code;

    /**
     * @var mixed[][]
     */
    public $folderIdMapping;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 9CFA2665-1FFE-5929-8468-C14C25890486
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'            => 'Code',
        'folderIdMapping' => 'FolderIdMapping',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->folderIdMapping) {
            $res['FolderIdMapping'] = $this->folderIdMapping;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateExperimentFoldersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FolderIdMapping'])) {
            $model->folderIdMapping = $map['FolderIdMapping'];
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
