<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class FileForReq extends Model
{
    /**
     * @description CustomId
     *
     * @var string
     */
    public $customId;

    /**
     * @description CustomLabels
     *
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @description FileHash
     *
     * @var string
     */
    public $fileHash;

    /**
     * @description OSSURI
     *
     * @var string
     */
    public $OSSURI;

    /**
     * @description URI
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'customId'     => 'CustomId',
        'customLabels' => 'CustomLabels',
        'fileHash'     => 'FileHash',
        'OSSURI'       => 'OSSURI',
        'URI'          => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->OSSURI) {
            $res['OSSURI'] = $this->OSSURI;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileForReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['OSSURI'])) {
            $model->OSSURI = $map['OSSURI'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
