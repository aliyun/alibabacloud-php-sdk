<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCompressFileDetectResultResponseBody;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $ext;

    /**
     * @example 0a212417e65c26ff133cfff28f6c****
     *
     * @var string
     */
    public $hashKey;

    /**
     * @example /root/1.zip/test****
     *
     * @var string
     */
    public $path;

    /**
     * @example 0
     *
     * @var int
     */
    public $result;

    /**
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @example WebShell
     *
     * @var string
     */
    public $virusType;
    protected $_name = [
        'ext'       => 'Ext',
        'hashKey'   => 'HashKey',
        'path'      => 'Path',
        'result'    => 'Result',
        'score'     => 'Score',
        'virusType' => 'VirusType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->virusType) {
            $res['VirusType'] = $this->virusType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['VirusType'])) {
            $model->virusType = $map['VirusType'];
        }

        return $model;
    }
}
