<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output;

use AlibabaCloud\Tea\Model;

class encryption extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $keyUri;

    /**
     * @var string
     */
    public $skipCnt;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id'      => 'Id',
        'key'     => 'Key',
        'keyType' => 'KeyType',
        'keyUri'  => 'KeyUri',
        'skipCnt' => 'SkipCnt',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }
        if (null !== $this->keyUri) {
            $res['KeyUri'] = $this->keyUri;
        }
        if (null !== $this->skipCnt) {
            $res['SkipCnt'] = $this->skipCnt;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }
        if (isset($map['KeyUri'])) {
            $model->keyUri = $map['KeyUri'];
        }
        if (isset($map['SkipCnt'])) {
            $model->skipCnt = $map['SkipCnt'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
