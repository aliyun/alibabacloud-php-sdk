<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class CreateTransactionRequest extends Model
{
    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var string
     */
    public $force;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'size'      => 'Size',
        'ext'       => 'Ext',
        'force'     => 'Force',
        'md5'       => 'Md5',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransactionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }

        return $model;
    }
}
