<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetFileDetectResultRequest extends Model
{
    /**
     * @description An array that consists of the identifiers of files. Only MD5 hash values are supported.
     *
     * @var string[]
     */
    public $hashKeyList;

    /**
     * @description The source IP address of the request.
     *
     * @example 183.46.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the file. Valid values:
     *
     *   **0**: unknown file
     *   **1**: binary file
     *   **2**: webshell file
     *   **4**: script file
     *
     * >  If you do not know the type of the file, set this parameter to 0.
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'hashKeyList' => 'HashKeyList',
        'sourceIp'    => 'SourceIp',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hashKeyList) {
            $res['HashKeyList'] = $this->hashKeyList;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileDetectResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HashKeyList'])) {
            if (!empty($map['HashKeyList'])) {
                $model->hashKeyList = $map['HashKeyList'];
            }
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
