<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class GetFileDetectResultInnerRequest extends Model
{
    /**
     * @var string[]
     */
    public $dnaHashKeyList;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $hashKeyList;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'dnaHashKeyList' => 'DnaHashKeyList',
        'hashKeyList' => 'HashKeyList',
        'level' => 'Level',
        'sourceIp' => 'SourceIp',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnaHashKeyList) {
            $res['DnaHashKeyList'] = $this->dnaHashKeyList;
        }
        if (null !== $this->hashKeyList) {
            $res['HashKeyList'] = $this->hashKeyList;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
     * @return GetFileDetectResultInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnaHashKeyList'])) {
            if (!empty($map['DnaHashKeyList'])) {
                $model->dnaHashKeyList = $map['DnaHashKeyList'];
            }
        }
        if (isset($map['HashKeyList'])) {
            if (!empty($map['HashKeyList'])) {
                $model->hashKeyList = $map['HashKeyList'];
            }
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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
