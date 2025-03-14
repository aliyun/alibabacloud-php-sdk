<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class HandleMaliciousFilesRequest extends Model
{
    /**
     * @description List of file IDs to be processed.
     * > You can call [ListAgentlessMaliciousFiles](~~ListAgentlessMaliciousFiles~~) to get the IDs.
     * > -
     *
     * @var int[]
     */
    public $fileIdList;

    /**
     * @description Type of operation:
     * - addWhitelist: Add to whitelist
     * - offWhitelist: Remove from whitelist
     *
     * @example addWhitelist
     *
     * @var string
     */
    public $operation;
    protected $_name = [
        'fileIdList' => 'FileIdList',
        'operation' => 'Operation',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileIdList) {
            $res['FileIdList'] = $this->fileIdList;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleMaliciousFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileIdList'])) {
            if (!empty($map['FileIdList'])) {
                $model->fileIdList = $map['FileIdList'];
            }
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
