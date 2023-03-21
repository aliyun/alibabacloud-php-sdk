<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlRequest\hashKeyContextList;
use AlibabaCloud\Tea\Model;

class CreateFileDetectUploadUrlRequest extends Model
{
    /**
     * @description The hash values of files.
     *
     * > You must specify at least one of the **HashKeyList** and **HashKeyContextList** parameters.
     * @var hashKeyContextList[]
     */
    public $hashKeyContextList;

    /**
     * @description The identifiers of files. Only MD5 hash values are supported.
     *
     * > You must specify at least one of the **HashKeyList** and **HashKeyContextList** parameters.
     * @example CreateFileDetectUploadUrl
     *
     * @var string[]
     */
    public $hashKeyList;

    /**
     * @description The type of the file. Valid values:
     *
     *   **0**: unknown file
     *   **1**: binary file
     *   **2**: webshell file
     *   **4**: script file
     *
     * > If you do not know the type of the file, set this parameter to **0**.
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'hashKeyContextList' => 'HashKeyContextList',
        'hashKeyList'        => 'HashKeyList',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hashKeyContextList) {
            $res['HashKeyContextList'] = [];
            if (null !== $this->hashKeyContextList && \is_array($this->hashKeyContextList)) {
                $n = 0;
                foreach ($this->hashKeyContextList as $item) {
                    $res['HashKeyContextList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hashKeyList) {
            $res['HashKeyList'] = $this->hashKeyList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileDetectUploadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HashKeyContextList'])) {
            if (!empty($map['HashKeyContextList'])) {
                $model->hashKeyContextList = [];
                $n                         = 0;
                foreach ($map['HashKeyContextList'] as $item) {
                    $model->hashKeyContextList[$n++] = null !== $item ? hashKeyContextList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HashKeyList'])) {
            if (!empty($map['HashKeyList'])) {
                $model->hashKeyList = $map['HashKeyList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
